<?php

namespace ContainerPuI2dL5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNewPartieControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\NewPartieController' shared autowired service.
     *
     * @return \App\Controller\NewPartieController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/NewPartieController.php';

        $container->services['App\\Controller\\NewPartieController'] = $instance = new \App\Controller\NewPartieController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\NewPartieController', $container));

        return $instance;
    }
}
