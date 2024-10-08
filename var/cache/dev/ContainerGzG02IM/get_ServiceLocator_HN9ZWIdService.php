<?php

namespace ContainerGzG02IM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HN9ZWIdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hN9ZWId' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hN9ZWId'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entreeSortie' => ['privates', '.errored..service_locator.hN9ZWId.App\\Entity\\EntreeSortie', NULL, 'Cannot autowire service ".service_locator.hN9ZWId": it needs an instance of "App\\Entity\\EntreeSortie" but this type has been excluded in "config/services.yaml".'],
            'entreeSortieRepository' => ['privates', 'App\\Repository\\EntreeSortieRepository', 'getEntreeSortieRepositoryService', true],
        ], [
            'entreeSortie' => 'App\\Entity\\EntreeSortie',
            'entreeSortieRepository' => 'App\\Repository\\EntreeSortieRepository',
        ]);
    }
}
