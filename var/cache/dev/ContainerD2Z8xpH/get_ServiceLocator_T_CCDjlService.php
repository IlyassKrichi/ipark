<?php

namespace ContainerD2Z8xpH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_T_CCDjlService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.T.cCDjl' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.T.cCDjl'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'réservation' => ['privates', '.errored..service_locator.T.cCDjl.App\\Entity\\Réservation', NULL, 'Cannot autowire service ".service_locator.T.cCDjl": it needs an instance of "App\\Entity\\Réservation" but this type has been excluded in "config/services.yaml".'],
        ], [
            'réservation' => 'App\\Entity\\Réservation',
        ]);
    }
}
