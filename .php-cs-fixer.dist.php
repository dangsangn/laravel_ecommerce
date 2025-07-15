<?php

$finder = PhpCsFixer\Finder::create()
  ->in(__DIR__)
  ->exclude('vendor');

return (new PhpCsFixer\Config())
  ->setRules([
    '@PSR12' => true,
    'array_syntax' => ['syntax' => 'short'],
    'binary_operator_spaces' => ['default' => 'align_single_space'],
    'trailing_comma_in_multiline' => ['elements' => ['arrays']],
    'no_unused_imports' => true,
    'ordered_imports' => true,
    'phpdoc_align' => false,
  ])
  ->setIndent('    ') // 4 spaces (chuẩn Laravel)
  ->setLineEnding("\n")
  ->setFinder($finder);
