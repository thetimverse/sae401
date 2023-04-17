<?php

namespace ContainerV3zM9nK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAccueilControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AccueilController' shared autowired service.
     *
     * @return \App\Controller\AccueilController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/AccueilController.php';

        $container->services['App\\Controller\\AccueilController'] = $instance = new \App\Controller\AccueilController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\AccueilController', $container));

        return $instance;
    }
}