<?php

namespace ContainerV3zM9nK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Cr4atruService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cr4atru' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cr4atru'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManagerInterface' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'motPartieRepository' => ['privates', 'App\\Repository\\MotPartieRepository', 'getMotPartieRepositoryService', true],
            'motRepository' => ['privates', 'App\\Repository\\MotRepository', 'getMotRepositoryService', true],
            'partieRepository' => ['privates', 'App\\Repository\\PartieRepository', 'getPartieRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'entityManagerInterface' => '?',
            'motPartieRepository' => 'App\\Repository\\MotPartieRepository',
            'motRepository' => 'App\\Repository\\MotRepository',
            'partieRepository' => 'App\\Repository\\PartieRepository',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
