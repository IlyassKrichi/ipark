<?php

<<<<<<<< HEAD:var/cache/dev/ContainerOhpH17T/getSecurity_Authenticator_Manager_MainService.php
namespace ContainerOhpH17T;

========
namespace ContainerFF9ljFM;
>>>>>>>> 4e6b7b2fd64ebad93ea245379d93b8ad6abb4679:var/cache/dev/ContainerFF9ljFM/getSecurity_Authenticator_Manager_MainService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_Manager_MainService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authenticator.manager.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticatorManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'AuthenticatorManagerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'UserAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'AuthenticatorManager.php';

        return $container->privates['security.authenticator.manager.main'] = new \Symfony\Component\Security\Http\Authentication\AuthenticatorManager([0 => ($container->privates['App\\Security\\LoginAuthenticator'] ?? $container->load('getLoginAuthenticatorService')), 1 => ($container->privates['security.authenticator.remember_me.main'] ?? $container->load('getSecurity_Authenticator_RememberMe_MainService'))], ($container->privates['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), ($container->privates['security.event_dispatcher.main'] ?? $container->getSecurity_EventDispatcher_MainService()), 'main', ($container->privates['logger'] ?? $container->getLoggerService()), true, true, []);
    }
}
