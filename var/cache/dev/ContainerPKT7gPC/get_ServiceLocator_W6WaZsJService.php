<?php

namespace ContainerPKT7gPC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_W6WaZsJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.W6WaZsJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.W6WaZsJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'paiement' => ['privates', '.errored..service_locator.W6WaZsJ.App\\Entity\\Paiement', NULL, 'Cannot autowire service ".service_locator.W6WaZsJ": it needs an instance of "App\\Entity\\Paiement" but this type has been excluded in "config/services.yaml".'],
        ], [
            'paiement' => 'App\\Entity\\Paiement',
        ]);
    }
}
