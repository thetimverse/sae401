<?php

<<<<<<<< HEAD:site_accueil/var/cache/dev/ContainerHJH3Rkp/get_ServiceLocator_Z9ydiC1Service.php
namespace ContainerHJH3Rkp;
========
namespace ContainerF4yJFeN;

>>>>>>>> main:site_accueil/var/cache/dev/ContainerF4yJFeN/get_ServiceLocator_Z9ydiC1Service.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Z9ydiC1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Z9ydiC1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Z9ydiC1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'passwordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
            'translator' => ['services', 'translator', 'getTranslatorService', false],
        ], [
            'passwordHasher' => '?',
            'translator' => '?',
        ]);
    }
}
