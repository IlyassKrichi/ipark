<?php

namespace ContainerZ657yfH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RNyJSA0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.rNyJSA0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rNyJSA0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'reservation' => ['privates', '.errored..service_locator.rNyJSA0.App\\Entity\\Reservation', NULL, 'Cannot autowire service ".service_locator.rNyJSA0": it needs an instance of "App\\Entity\\Reservation" but this type has been excluded in "config/services.yaml".'],
        ], [
            'em' => '?',
            'reservation' => 'App\\Entity\\Reservation',
        ]);
    }
}
