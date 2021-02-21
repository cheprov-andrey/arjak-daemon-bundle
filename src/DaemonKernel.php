<?php

namespace arjak\DaemonBundle;

use \Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;

/**
 * Class DaemonKernel
 * @package arjak\DaemonBundle
 */
class DaemonKernel extends Kernel
{
    use MicroKernelTrait;

    /**
     * @return DaemonBundle[]
     */
    public function registerBundles()
    {
        return [
            new DaemonBundle()
        ];
    }

    /**
     * @param RoutingConfigurator $routes
     */
    protected function configureRoutes(RoutingConfigurator $routes): void
    {
        $routes->import(__DIR__.'/../../config/routes.yaml');
    }
}
