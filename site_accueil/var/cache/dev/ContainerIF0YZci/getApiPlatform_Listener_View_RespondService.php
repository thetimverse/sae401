<?php

namespace ContainerIF0YZci;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Listener_View_RespondService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.listener.view.respond' shared service.
     *
     * @return \ApiPlatform\Symfony\EventListener\RespondListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Symfony/EventListener/RespondListener.php';

        $a = ($container->privates['api_platform.metadata.resource.metadata_collection_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataCollectionFactory_CachedService());

        if (isset($container->privates['api_platform.listener.view.respond'])) {
            return $container->privates['api_platform.listener.view.respond'];
        }

        return $container->privates['api_platform.listener.view.respond'] = new \ApiPlatform\Symfony\EventListener\RespondListener($a, ($container->privates['api_platform.symfony.iri_converter'] ?? $container->getApiPlatform_Symfony_IriConverterService()));
    }
}
