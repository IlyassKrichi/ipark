<?php

namespace ContainerJ8Uyu4B;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LTbvCHwService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lTbvCHw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lTbvCHw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'client' => ['privates', '.errored..service_locator.lTbvCHw.App\\Entity\\Client', NULL, 'Cannot autowire service ".service_locator.lTbvCHw": it needs an instance of "App\\Entity\\Client" but this type has been excluded in "config/services.yaml".'],
        ], [
            'client' => 'App\\Entity\\Client',
        ]);
    }
}
