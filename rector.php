<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;
use Rector\TypeDeclaration\Rector\StmtsAwareInterface\DeclareStrictTypesRector;

return RectorConfig::configure()
    ->withPaths([__DIR__ . '/src'])
    ->withSets([
        LevelSetList::UP_TO_PHP_82,
    ])
    ->withPreparedSets(
        symfonyCodeQuality: true,
    )
    ->withComposerBased(
        symfony: true,
    )
    ->withRules([
        DeclareStrictTypesRector::class,
    ]);
