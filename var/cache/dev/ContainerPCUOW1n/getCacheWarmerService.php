<?php

<<<<<<<< HEAD:var/cache/dev/ContainerPCUOW1n/getCacheWarmerService.php
namespace ContainerPCUOW1n;

========
namespace ContainerPdUOnCs;
>>>>>>>> 4e6b7b2fd64ebad93ea245379d93b8ad6abb4679:var/cache/dev/ContainerPdUOnCs/getCacheWarmerService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCacheWarmerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'cache_warmer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'CacheWarmerAggregate.php';

        return $container->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['cache_pool_clearer.cache_warmer'] ?? $container->load('getCachePoolClearer_CacheWarmerService'));
            yield 1 => ($container->privates['config_builder.warmer'] ?? $container->load('getConfigBuilder_WarmerService'));
            yield 2 => ($container->privates['router.cache_warmer'] ?? $container->load('getRouter_CacheWarmerService'));
            yield 3 => ($container->privates['annotations.cache_warmer'] ?? $container->load('getAnnotations_CacheWarmerService'));
            yield 4 => ($container->privates['validator.mapping.cache_warmer'] ?? $container->load('getValidator_Mapping_CacheWarmerService'));
            yield 5 => ($container->privates['doctrine.orm.proxy_cache_warmer'] ?? $container->load('getDoctrine_Orm_ProxyCacheWarmerService'));
            yield 6 => ($container->privates['twig.template_cache_warmer'] ?? $container->load('getTwig_TemplateCacheWarmerService'));
        }, 7), true, ($container->targetDir.''.'/App_KernelDevDebugContainerDeprecations.log'));
    }
}
