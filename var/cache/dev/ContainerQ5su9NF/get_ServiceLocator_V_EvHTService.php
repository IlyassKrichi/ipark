<?php

<<<<<<<< HEAD:var/cache/dev/ContainerQ5su9NF/get_ServiceLocator_V_EvHTService.php
namespace ContainerQ5su9NF;

========
namespace ContainerNSRiD8R;
>>>>>>>> 22706224e6831c1c2fb6365639649c394e2f61b7:var/cache/dev/ContainerNSRiD8R/get_ServiceLocator_V_EvHTService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_V_EvHTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.v.Ev_hT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.v.Ev_hT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'authenticator' => ['privates', 'App\\Security\\LoginAuthenticator', 'getLoginAuthenticatorService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'userAuthenticator' => ['privates', 'security.user_authenticator', 'getSecurity_UserAuthenticatorService', true],
            'userPasswordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
        ], [
            'authenticator' => 'App\\Security\\LoginAuthenticator',
            'entityManager' => '?',
            'userAuthenticator' => '?',
            'userPasswordHasher' => '?',
        ]);
    }
}
