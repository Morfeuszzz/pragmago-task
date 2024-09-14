<?php

$finder = (new PhpCsFixer\Finder())
    ->ignoreDotFiles(true)
    ->ignoreVCSIgnored(true)
    ->name('*.php')
    ->in([
        './src',
        './tests',
    ]);

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(false)
    ->setRules([
        '@PSR12' => true,
        'trim_array_spaces' => true,
        'no_unused_imports' => true,
        'ordered_imports' => [
            'sort_algorithm' => 'length',
            'imports_order' => ['const', 'class', 'function']
        ],
    ])
    ->setFinder($finder)
    ->setCacheFile('.php-cs-fixer.cache')
    ->setLineEnding("\n");
