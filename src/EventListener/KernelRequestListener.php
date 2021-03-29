<?php

namespace arjak\DaemonBundle\EventListener;

use arjak\DaemonBundle\DaemonBundle;
use arjak\DaemonBundle\Tools\ServiceProvider;
use Psr\Container\ContainerInterface;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Contracts\Service\ServiceSubscriberInterface;

/**
 * Class KernelRequestListener
 * @package arjak\DaemonBundle\EventListener
 */
class KernelRequestListener implements ServiceSubscriberInterface
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
     * @param RequestEvent $event
     */
    public function onKernelRequest(RequestEvent $event) : void
    {
        DaemonBundle::setServiceProvider($this->container->get('serviceProvider'));
    }
}
