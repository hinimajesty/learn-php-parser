<?php

use PhpParser\Node;
use PhpParser\Error;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\NodeDumper;
use PhpParser\NodeFinder;
use PhpParser\NodeTraverser;
use PhpParser\ParserFactory;
use PhpParser\Node\Expr\Closure;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Scalar\String_;
use PhpParser\Node\Stmt\Function_;
use PhpParser\NodeVisitorAbstract;
use PhpParser\Node\Expr\MethodCall;
use PhpParser\Node\Expr\StaticCall;
use PhpParser\Node\Stmt\Expression;
use PhpParser\Node\Stmt\ClassMethod;
use PhpParser\PrettyPrinter\Standard;
use PhpParser\NodeVisitor\ParentConnectingVisitor;


require 'vendor/autoload.php';

function dd($node)
{
    echo json_encode($node, JSON_PRETTY_PRINT), "\n";
    die();
}

$code = <<<'CODE'
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('host_id')->unsigned();
            $table->foreign('host_id')->references('id')->on('hosts')->onDelete('cascade');
            $table->string('type');
            $table->string('status')->nullable();
            $table->boolean('enabled')->default(true);
            $table->text('last_run_message')->nullable();
            $table->json('last_run_output')->nullable();
            $table->timestamp('last_ran_at')->nullable();
            $table->integer('next_run_in_minutes')->nullable();
            $table->timestamp('started_throttling_failing_notifications_at')->nullable();
            $table->json('custom_properties')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('checks');
    }
}
CODE;

$parser = (new ParserFactory)->create(ParserFactory::PREFER_PHP7);
try {
    $ast = $parser->parse($code);
} catch (Error $error) {
    echo "Parse error: {$error->getMessage()}\n";
    return;
}


$traverser = new NodeTraverser();
$prettyPrinter = new PhpParser\PrettyPrinter\Standard;
$traverser->addVisitor(new class extends NodeVisitorAbstract {

    public function enterNode(Node $node)
    {
        $finder = new NodeFinder();

        if ($node instanceof Expression) {

            $methodCalls = $finder->findInstanceOf($node->expr, MethodCall::class);

            foreach ($methodCalls as $methodCall) {

                if ($methodCall->var->name == 'table' && $methodCall->name->name == 'foreign') {
                    $variable = new Variable('table');

                    if (isset($methodCall->args[0])) {
                        $argValue = $methodCall->args[0]->value->value;

                        $foreinKey = new Arg(new String_($argValue));

                        $args = [$foreinKey];

                        $newMethodCall = new MethodCall($variable, 'foreignId', $args);

                        $node = new Expression($newMethodCall);

                        return $node;
                    }
                }
            }
        }
    }
});

$ast = $traverser->traverse($ast);


$prettyPrinter = new Standard;


// $dumper = new NodeDumper;
// echo $dumper->dump($ast) . "\n";