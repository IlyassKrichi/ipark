<?php

<<<<<<<< HEAD:var/cache/dev/ContainerPCUOW1n/getController_TemplateAttributeListenerService.php
namespace ContainerPCUOW1n;

========
namespace ContainerPdUOnCs;
>>>>>>>> 4e6b7b2fd64ebad93ea245379d93b8ad6abb4679:var/cache/dev/ContainerPdUOnCs/getController_TemplateAttributeListenerService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getController_TemplateAttributeListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'controller.template_attribute_listener' shared service.
     *
     * @return \Symfony\Bridge\Twig\EventListener\TemplateAttributeListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'TemplateAttributeListener.php';

        $a = ($container->privates['twig'] ?? $container->getTwigService());

        if (isset($container->privates['controller.template_attribute_listener'])) {
            return $container->privates['controller.template_attribute_listener'];
        }

        return $container->privates['controller.template_attribute_listener'] = new \Symfony\Bridge\Twig\EventListener\TemplateAttributeListener($a);
    }
}
