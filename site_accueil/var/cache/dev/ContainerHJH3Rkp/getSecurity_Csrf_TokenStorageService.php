<?php

<<<<<<<< HEAD:site_accueil/var/cache/dev/ContainerHJH3Rkp/getSecurity_Csrf_TokenStorageService.php
namespace ContainerHJH3Rkp;
========
namespace ContainerF4yJFeN;

>>>>>>>> main:site_accueil/var/cache/dev/ContainerF4yJFeN/getSecurity_Csrf_TokenStorageService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Csrf_TokenStorageService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.csrf.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-csrf/TokenStorage/TokenStorageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-csrf/TokenStorage/ClearableTokenStorageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-csrf/TokenStorage/SessionTokenStorage.php';

        return $container->privates['security.csrf.token_storage'] = new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()));
    }
}
