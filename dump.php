<?php

array(


    2: Stmt_Class(
        attrGroups: array(
        )
        flags: 0
        name: Identifier(
            name: CreateChecksTable
        )
        extends: Name(
            parts: array(
                0: Migration
            )
        )
        implements: array(
        )
        stmts: array(
            0: Stmt_ClassMethod(
                attrGroups: array(
                )
                flags: MODIFIER_PUBLIC (1)
                byRef: false
                name: Identifier(
                    name: up
                )
                params: array(
                )
                returnType: null
                stmts: array(
                    0: Stmt_Expression(
                        expr: Expr_StaticCall(
                            class: Name(
                                parts: array(
                                    0: Schema
                                )
                            )
                            name: Identifier(
                                name: create
                            )
                            args: array(
                                0: Arg(
                                    name: null
                                    value: Scalar_String(
                                        value: checks
                                    )
                                    byRef: false
                                    unpack: false
                                )
                                1: Arg(
                                    name: null
                                    value: Expr_Closure(
                                        attrGroups: array(
                                        )
                                        static: false
                                        byRef: false
                                        params: array(
                                            0: Param(
                                                attrGroups: array(
                                                )
                                                flags: 0
                                                type: Name(
                                                    parts: array(
                                                        0: Blueprint
                                                    )
                                                )
                                                byRef: false
                                                variadic: false
                                                var: Expr_Variable(
                                                    name: table
                                                )
                                                default: null
                                            )
                                        )
                                        uses: array(
                                        )
                                        returnType: null
                                        stmts: array(
                                            0: Stmt_Expression(
                                                expr: Expr_MethodCall(
                                                    var: Expr_Variable(
                                                        name: table
                                                    )
                                                    name: Identifier(
                                                        name: increments
                                                    )
                                                    args: array(
                                                        0: Arg(
                                                            name: null
                                                            value: Scalar_String(
                                                                value: id
                                                            )
                                                            byRef: false
                                                            unpack: false
                                                        )
                                                    )
                                                )
                                            )
                                            1: Stmt_Expression(
                                                expr: Expr_MethodCall(
                                                    var: Expr_MethodCall(
                                                        var: Expr_Variable(
                                                            name: table
                                                        )
                                                        name: Identifier(
                                                            name: integer
                                                        )
                                                        args: array(
                                                            0: Arg(
                                                                name: null
                                                                value: Scalar_String(
                                                                    value: host_id
                                                                )
                                                                byRef: false
                                                                unpack: false
                                                            )
                                                        )
                                                    )
                                                    name: Identifier(
                                                        name: unsigned
                                                    )
                                                    args: array(
                                                    )
                                                )
                                            )
                                            2: Stmt_Expression(
                                                expr: Expr_MethodCall(
                                                    var: Expr_MethodCall(
                                                        var: Expr_MethodCall(
                                                            var: Expr_MethodCall(
                                                                var: Expr_Variable(
                                                                    name: table
                                                                )
                                                                name: Identifier(
                                                                    name: foreign
                                                                )
                                                                args: array(
                                                                    0: Arg(
                                                                        name: null
                                                                        value: Scalar_String(
                                                                            value: host_id
                                                                        )
                                                                        byRef: false
                                                                        unpack: false
                                                                    )
                                                                )
                                                            )
                                                            name: Identifier(
                                                                name: references
                                                            )
                                                            args: array(
                                                                0: Arg(
                                                                    name: null
                                                                    value: Scalar_String(
                                                                        value: id
                                                                    )
                                                                    byRef: false
                                                                    unpack: false
                                                                )
                                                            )
                                                        )
                                                        name: Identifier(
                                                            name: on
                                                        )
                                                        args: array(
                                                            0: Arg(
                                                                name: null
                                                                value: Scalar_String(
                                                                    value: hosts
                                                                )
                                                                byRef: false
                                                                unpack: false
                                                            )
                                                        )
                                                    )
                                                    name: Identifier(
                                                        name: onDelete
                                                    )
                                                    args: array(
                                                        0: Arg(
                                                            name: null
                                                            value: Scalar_String(
                                                                value: cascade
                                                            )
                                                            byRef: false
                                                            unpack: false
                                                        )
                                                    )
                                                )
                                            )
                                            3: Stmt_Expression(
                                                expr: Expr_MethodCall(
                                                    var: Expr_Variable(
                                                        name: table
                                                    )
                                                    name: Identifier(
                                                        name: string
                                                    )
                                                    args: array(
                                                        0: Arg(
                                                            name: null
                                                            value: Scalar_String(
                                                                value: type
                                                            )
                                                            byRef: false
                                                            unpack: false
                                                        )
                                                    )
                                                )
                                            )
                                            4: Stmt_Expression(
                                                expr: Expr_MethodCall(
                                                    var: Expr_MethodCall(
                                                        var: Expr_Variable(
                                                            name: table
                                                        )
                                                        name: Identifier(
                                                            name: string
                                                        )
                                                        args: array(
                                                            0: Arg(
                                                                name: null
                                                                value: Scalar_String(
                                                                    value: status
                                                                )
                                                                byRef: false
                                                                unpack: false
                                                            )
                                                        )
                                                    )
                                                    name: Identifier(
                                                        name: nullable
                                                    )
                                                    args: array(
                                                    )
                                                )
                                            )
                                            5: Stmt_Expression(
                                                expr: Expr_MethodCall(
                                                    var: Expr_MethodCall(
                                                        var: Expr_Variable(
                                                            name: table
                                                        )
                                                        name: Identifier(
                                                            name: boolean
                                                        )
                                                        args: array(
                                                            0: Arg(
                                                                name: null
                                                                value: Scalar_String(
                                                                    value: enabled
                                                                )
                                                                byRef: false
                                                                unpack: false
                                                            )
                                                        )
                                                    )
                                                    name: Identifier(
                                                        name: default
                                                    )
                                                    args: array(
                                                        0: Arg(
                                                            name: null
                                                            value: Expr_ConstFetch(
                                                                name: Name(
                                                                    parts: array(
                                                                        0: true
                                                                    )
                                                                )
                                                            )
                                                            byRef: false
                                                            unpack: false
                                                        )
                                                    )
                                                )
                                            )
                                            6: Stmt_Expression(
                                                expr: Expr_MethodCall(
                                                    var: Expr_MethodCall(
                                                        var: Expr_Variable(
                                                            name: table
                                                        )
                                                        name: Identifier(
                                                            name: text
                                                        )
                                                        args: array(
                                                            0: Arg(
                                                                name: null
                                                                value: Scalar_String(
                                                                    value: last_run_message
                                                                )
                                                                byRef: false
                                                                unpack: false
                                                            )
                                                        )
                                                    )
                                                    name: Identifier(
                                                        name: nullable
                                                    )
                                                    args: array(
                                                    )
                                                )
                                            )
                                            7: Stmt_Expression(
                                                expr: Expr_MethodCall(
                                                    var: Expr_MethodCall(
                                                        var: Expr_Variable(
                                                            name: table
                                                        )
                                                        name: Identifier(
                                                            name: json
                                                        )
                                                        args: array(
                                                            0: Arg(
                                                                name: null
                                                                value: Scalar_String(
                                                                    value: last_run_output
                                                                )
                                                                byRef: false
                                                                unpack: false
                                                            )
                                                        )
                                                    )
                                                    name: Identifier(
                                                        name: nullable
                                                    )
                                                    args: array(
                                                    )
                                                )
                                            )
                                            8: Stmt_Expression(
                                                expr: Expr_MethodCall(
                                                    var: Expr_MethodCall(
                                                        var: Expr_Variable(
                                                            name: table
                                                        )
                                                        name: Identifier(
                                                            name: timestamp
                                                        )
                                                        args: array(
                                                            0: Arg(
                                                                name: null
                                                                value: Scalar_String(
                                                                    value: last_ran_at
                                                                )
                                                                byRef: false
                                                                unpack: false
                                                            )
                                                        )
                                                    )
                                                    name: Identifier(
                                                        name: nullable
                                                    )
                                                    args: array(
                                                    )
                                                )
                                            )
                                            9: Stmt_Expression(
                                                expr: Expr_MethodCall(
                                                    var: Expr_MethodCall(
                                                        var: Expr_Variable(
                                                            name: table
                                                        )
                                                        name: Identifier(
                                                            name: integer
                                                        )
                                                        args: array(
                                                            0: Arg(
                                                                name: null
                                                                value: Scalar_String(
                                                                    value: next_run_in_minutes
                                                                )
                                                                byRef: false
                                                                unpack: false
                                                            )
                                                        )
                                                    )
                                                    name: Identifier(
                                                        name: nullable
                                                    )
                                                    args: array(
                                                    )
                                                )
                                            )
                                            10: Stmt_Expression(
                                                expr: Expr_MethodCall(
                                                    var: Expr_MethodCall(
                                                        var: Expr_Variable(
                                                            name: table
                                                        )
                                                        name: Identifier(
                                                            name: timestamp
                                                        )
                                                        args: array(
                                                            0: Arg(
                                                                name: null
                                                                value: Scalar_String(
                                                                    value: started_throttling_failing_notifications_at
                                                                )
                                                                byRef: false
                                                                unpack: false
                                                            )
                                                        )
                                                    )
                                                    name: Identifier(
                                                        name: nullable
                                                    )
                                                    args: array(
                                                    )
                                                )
                                            )
                                            11: Stmt_Expression(
                                                expr: Expr_MethodCall(
                                                    var: Expr_MethodCall(
                                                        var: Expr_Variable(
                                                            name: table
                                                        )
                                                        name: Identifier(
                                                            name: json
                                                        )
                                                        args: array(
                                                            0: Arg(
                                                                name: null
                                                                value: Scalar_String(
                                                                    value: custom_properties
                                                                )
                                                                byRef: false
                                                                unpack: false
                                                            )
                                                        )
                                                    )
                                                    name: Identifier(
                                                        name: nullable
                                                    )
                                                    args: array(
                                                    )
                                                )
                                            )
                                            12: Stmt_Expression(
                                                expr: Expr_MethodCall(
                                                    var: Expr_Variable(
                                                        name: table
                                                    )
                                                    name: Identifier(
                                                        name: timestamps
                                                    )
                                                    args: array(
                                                    )
                                                )
                                            )
                                        )
                                    )
                                    byRef: false
                                    unpack: false
       