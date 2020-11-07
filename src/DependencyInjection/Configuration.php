<?php

declare(strict_types=1);

namespace Hraph\SyliusPaygreenPlugin\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('sylius_paygreen');
        $rootNode = $treeBuilder->getRootNode();

        return $treeBuilder;
    }
}
