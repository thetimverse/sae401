<?php

namespace Container0PER8gK;

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
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticatorManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/UserAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticatorManager.php';

        $a = ($container->privates['App\\Security\\LoginAuthenticator'] ?? $container->load('getLoginAuthenticatorService'));

        if (isset($container->privates['security.authenticator.manager.main'])) {
            return $container->privates['security.authenticator.manager.main'];
        }
        $b = ($container->privates['security.authenticator.form_login.main'] ?? $container->load('getSecurity_Authenticator_FormLogin_MainService'));

        if (isset($container->privates['security.authenticator.manager.main'])) {
            return $container->privates['security.authenticator.manager.main'];
        }
        $c = ($container->privates['security.event_dispatcher.main'] ?? $container->getSecurity_EventDispatcher_MainService());

        if (isset($container->privates['security.authenticator.manager.main'])) {
            return $container->privates['security.authenticator.manager.main'];
        }

        return $container->privates['security.authenticator.manager.main'] = new \Symfony\Component\Security\Http\Authentication\AuthenticatorManager([0 => $a, 1 => $b], ($container->privates['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), $c, 'main', ($container->privates['monolog.logger.security'] ?? $container->getMonolog_Logger_SecurityService()), true, true, []);
    }
}
