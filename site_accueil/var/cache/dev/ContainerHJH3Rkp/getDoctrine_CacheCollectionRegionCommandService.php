<?php

<<<<<<<< HEAD:site_accueil/var/cache/dev/ContainerHJH3Rkp/getDoctrine_CacheCollectionRegionCommandService.php
namespace ContainerHJH3Rkp;
========
namespace ContainerF4yJFeN;

>>>>>>>> main:site_accueil/var/cache/dev/ContainerF4yJFeN/getDoctrine_CacheCollectionRegionCommandService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_CacheCollectionRegionCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.cache_collection_region_command' shared service.
     *
     * @return \Doctrine\ORM\Tools\Console\Command\ClearCache\CollectionRegionCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/AbstractEntityManagerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/CollectionRegionCommand.php';

        $container->privates['doctrine.cache_collection_region_command'] = $instance = new \Doctrine\ORM\Tools\Console\Command\ClearCache\CollectionRegionCommand(($container->privates['doctrine.orm.command.entity_manager_provider'] ?? $container->load('getDoctrine_Orm_Command_EntityManagerProviderService')));

        $instance->setName('doctrine:cache:clear-collection-region');

        return $instance;
    }
}
