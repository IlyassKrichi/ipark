<?php

namespace ContainerD2Z8xpH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZHjtxDpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZHjtxDp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZHjtxDp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'réservationRepository' => ['privates', 'App\\Repository\\RéservationRepository', 'getRéservationRepositoryService', true],
        ], [
            'réservationRepository' => 'App\\Repository\\RéservationRepository',
        ]);
    }
}
