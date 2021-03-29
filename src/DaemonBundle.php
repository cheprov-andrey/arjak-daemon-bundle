<?php

namespace arjak\DaemonBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use arjak\DaemonBundle\Tools\ServiceProvider;

/**
 * Class DaemonBundle
 * @package arjak\DaemonBundle
 */
class DaemonBundle extends Bundle
{
    /**
     * @var ServiceProvider $serviceProvider
     */
    private static ServiceProvider $serviceProvider;

    /**
     * @return string
     */
    public function getPath(): string
    {
        return dirname(__DIR__);
    }

    /**
     * @return ServiceProvider
     */
    public static function getServiceProvider(): ServiceProvider
    {
        return self::$serviceProvider;
    }

    /**
     * @param ServiceProvider $serviceProvider
     */
    public static function setServiceProvider(ServiceProvider $serviceProvider)
    {
        self::$serviceProvider = $serviceProvider;
    }
}
