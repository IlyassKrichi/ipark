<?php

<<<<<<<< HEAD:var/cache/dev/ContainerQ5su9NF/getSecurity_Authenticator_RememberMe_MainService.php
namespace ContainerQ5su9NF;

========
namespace ContainerZ657yfH;
>>>>>>>> 22706224e6831c1c2fb6365639649c394e2f61b7:var/cache/dev/ContainerZ657yfH/getSecurity_Authenticator_RememberMe_MainService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_RememberMe_MainService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authenticator.remember_me.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authenticator\RememberMeAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authenticator'.\DIRECTORY_SEPARATOR.'AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authenticator'.\DIRECTORY_SEPARATOR.'InteractiveAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authenticator'.\DIRECTORY_SEPARATOR.'RememberMeAuthenticator.php';

        return $container->privates['security.authenticator.remember_me.main'] = new \Symfony\Component\Security\Http\Authenticator\RememberMeAuthenticator(($container->privates['security.authenticator.remember_me_handler.main'] ?? $container->load('getSecurity_Authenticator_RememberMeHandler_MainService')), $container->getEnv('APP_SECRET'), ($container->privates['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), 'REMEMBERME', ($container->privates['logger'] ?? $container->getLoggerService()));
    }
}
