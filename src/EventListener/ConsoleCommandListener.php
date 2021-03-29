<?php

namespace arjak\DaemonBundle\EventListener;

use arjak\DaemonBundle\Tools\ServiceProvider;
use Psr\Container\ContainerInterface;
use Symfony\Component\Console\Event\ConsoleEvent;
use Symfony\Contracts\Service\ServiceSubscriberInterface;

/**
 * Class ConsoleCommandListener
 * @package arjak\DaemonBundle\EventListener
 */
class ConsoleCommandListener implements ServiceSubscriberInterface
{
    /**
     * @var ContainerInterface $container
     */
    protected ContainerInterface $container;

    /**
     * Service constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * @return array
     */
    public static function getSubscribedServices() : array
    {
        return [
            'serviceProvider' => ServiceProvider::class,
        ];
    }

    /**
     * @param ConsoleEvent $event
     */
    public function onConsoleCommand(ConsoleEvent $event) : void
    {

    }
}
