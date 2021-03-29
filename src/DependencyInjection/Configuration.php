<?php

namespace arjak\DaemonBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 * @package arjak\DaemonBundle\DependencyInjection
 */
class Configuration implements ConfigurationInterface
{
    /**
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('calendar');

        $treeBuilder->getRootNode()
            ->children()
            ->booleanNode('enable_soft_delete')->end()
            ->end();

        return $treeBuilder;
    }
}
