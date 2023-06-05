<?php

namespace ContainerXcE98m6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Og9uKc7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Og9uKc7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Og9uKc7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'parking' => ['privates', '.errored..service_locator.Og9uKc7.App\\Entity\\Parking', NULL, 'Cannot autowire service ".service_locator.Og9uKc7": it needs an instance of "App\\Entity\\Parking" but this type has been excluded in "config/services.yaml".'],
            'parkingRepository' => ['privates', 'App\\Repository\\ParkingRepository', 'getParkingRepositoryService', true],
        ], [
            'parking' => 'App\\Entity\\Parking',
            'parkingRepository' => 'App\\Repository\\ParkingRepository',
        ]);
    }
}
