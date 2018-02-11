<?php

/**
 * Reference: https://gist.github.com/petericebear/72e2b462f59b305c551c#gistcomment-2277363
 **/
$finder = PhpCsFixer\Finder::create()
    ->notPath('bootstrap/cache')
    ->notPath('storage')
    ->notPath('vendor')
    ->in(__DIR__)
    ->name('*.php')
    ->notName('*.blade.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

return PhpCsFixer\Config::create()
    ->setRules([
        '@Symfony'                          => true,
        'binary_operator_spaces'            => ['default' => 'align'],
        'array_syntax'                      => ['syntax' => 'short'],
        'concat_space'                      => ['spacing' => 'one'],
        'linebreak_after_opening_tag'       => true,
        'not_operator_with_successor_space' => true,
        'ordered_imports'                   => true,
        'phpdoc_order'                      => true,
        'phpdoc_no_empty_return'            => false,
        'phpdoc_no_package'                 => false,
    ])->setFinder($finder);
