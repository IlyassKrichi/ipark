<?php

namespace ContainerZMepjc5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DoLz9aeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.doLz9ae' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.doLz9ae'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reservation' => ['privates', '.errored..service_locator.doLz9ae.App\\Entity\\Reservation', NULL, 'Cannot autowire service ".service_locator.doLz9ae": it needs an instance of "App\\Entity\\Reservation" but this type has been excluded in "config/services.yaml".'],
            'reservationRepository' => ['privates', 'App\\Repository\\ReservationRepository', 'getReservationRepositoryService', true],
        ], [
            'reservation' => 'App\\Entity\\Reservation',
            'reservationRepository' => 'App\\Repository\\ReservationRepository',
        ]);
    }
}
