<?php

<<<<<<<< HEAD:var/cache/dev/ContainerOhpH17T/getConfigBuilder_WarmerService.php
namespace ContainerOhpH17T;

========
namespace ContainerFF9ljFM;
>>>>>>>> 4e6b7b2fd64ebad93ea245379d93b8ad6abb4679:var/cache/dev/ContainerFF9ljFM/getConfigBuilder_WarmerService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConfigBuilder_WarmerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'config_builder.warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ConfigBuilderCacheWarmer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'ConfigBuilderCacheWarmer.php';

        return $container->privates['config_builder.warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ConfigBuilderCacheWarmer(($container->services['kernel'] ?? $container->get('kernel', 1)), ($container->privates['logger'] ?? $container->getLoggerService()));
    }
}
