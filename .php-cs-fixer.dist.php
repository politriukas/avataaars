<?php

$finder = (new PhpCsFixer\Finder())
    ->in([
        __DIR__.'/src',
        __DIR__.'/tests',
    ]);

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@Symfony' => true,
        '@Symfony:risky' => true,
        '@PHP81Migration' => true,
        '@PhpCsFixer:risky' => true,
        'array_indentation' => true,
        'list_syntax' => ['syntax' => 'short'],
        'php_unit_test_case_static_method_calls' => ['call_type' => 'self'],
        'php_unit_strict' => true,
        'yoda_style' => false,
        'static_lambda' => true,
        'align_multiline_comment' => true,
        'no_null_property_initialization' => true,
        'global_namespace_import' => [
            'import_classes' => true,
            'import_constants' => true,
            'import_functions' => true,
        ],
        'ordered_imports' => [
            'imports_order' => ['class', 'const', 'function'],
        ],
    ])
    ->setFinder($finder);
