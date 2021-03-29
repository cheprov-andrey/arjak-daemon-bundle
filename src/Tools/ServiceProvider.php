<?php

namespace arjak\DaemonBundle\Tools;

use arjak\DaemonBundle\Localizations\LocalizationFactory;
use Psr\Container\ContainerInterface;
use Symfony\Contracts\Service\ServiceSubscriberInterface;

/**
 * Class ServiceProvider
 * @package arjak\DaemonBundle\Tools
 *
 * @property-read LocalizationFactory $localizationFactory
 */
class ServiceProvider implements ServiceSubscriberInterface
{
    /**
     * @var ContainerInterface $container
     */
    private ContainerInterface $container;

    /**
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * @param string $name
     * @return object|null
     */
    public function __get(string $name) : ?object
    {
        if (array_key_exists($name, static::getSubscribedServices())) {
            return $this->container->get($name);
        }

        return null;
    }

    /**
     * @return array
     */
    public static function getSubscribedServices() : array
    {
        return [
            'localizationFactory' => LocalizationFactory::class,
        ];
    }
}
