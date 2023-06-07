<?php

namespace ContainerJ8Uyu4B;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_T1NedXTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.T1NedXT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.T1NedXT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'client' => ['privates', '.errored..service_locator.T1NedXT.App\\Entity\\Client', NULL, 'Cannot autowire service ".service_locator.T1NedXT": it needs an instance of "App\\Entity\\Client" but this type has been excluded in "config/services.yaml".'],
            'clientRepository' => ['privates', 'App\\Repository\\ClientRepository', 'getClientRepositoryService', true],
        ], [
            'client' => 'App\\Entity\\Client',
            'clientRepository' => 'App\\Repository\\ClientRepository',
        ]);
    }
}
