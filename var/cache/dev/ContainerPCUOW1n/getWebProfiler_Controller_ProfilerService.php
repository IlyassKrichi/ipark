<?php

<<<<<<<< HEAD:var/cache/dev/ContainerPCUOW1n/getWebProfiler_Controller_ProfilerService.php
namespace ContainerPCUOW1n;

========
namespace ContainerFF9ljFM;
>>>>>>>> 4e6b7b2fd64ebad93ea245379d93b8ad6abb4679:var/cache/dev/ContainerFF9ljFM/getWebProfiler_Controller_ProfilerService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWebProfiler_Controller_ProfilerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'web_profiler.controller.profiler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'web-profiler-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ProfilerController.php';

        return $container->services['web_profiler.controller.profiler'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController(($container->services['router'] ?? $container->getRouterService()), ($container->services['.container.private.profiler'] ?? $container->get_Container_Private_ProfilerService()), ($container->privates['twig'] ?? $container->getTwigService()), $container->parameters['data_collector.templates'], ($container->privates['web_profiler.csp.handler'] ?? $container->getWebProfiler_Csp_HandlerService()), \dirname(__DIR__, 4));
    }
}
