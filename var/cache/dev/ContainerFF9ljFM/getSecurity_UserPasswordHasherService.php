<?php

<<<<<<<< HEAD:var/cache/dev/ContainerOhpH17T/getSecurity_UserPasswordHasherService.php
namespace ContainerOhpH17T;

========
namespace ContainerFF9ljFM;
>>>>>>>> 4e6b7b2fd64ebad93ea245379d93b8ad6abb4679:var/cache/dev/ContainerFF9ljFM/getSecurity_UserPasswordHasherService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_UserPasswordHasherService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.user_password_hasher' shared service.
     *
     * @return \Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'password-hasher'.\DIRECTORY_SEPARATOR.'Hasher'.\DIRECTORY_SEPARATOR.'UserPasswordHasherInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'password-hasher'.\DIRECTORY_SEPARATOR.'Hasher'.\DIRECTORY_SEPARATOR.'UserPasswordHasher.php';

        return $container->privates['security.user_password_hasher'] = new \Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher(($container->privates['security.password_hasher_factory'] ?? $container->load('getSecurity_PasswordHasherFactoryService')));
    }
}
