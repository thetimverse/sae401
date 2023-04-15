<?php

namespace Container0PER8gK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Listener_View_ValidateService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.listener.view.validate' shared service.
     *
     * @return \ApiPlatform\Symfony\EventListener\ValidateListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Symfony/EventListener/ValidateListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Validator/ValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Symfony/Validator/Validator.php';

        $a = ($container->privates['api_platform.metadata.resource.metadata_collection_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataCollectionFactory_CachedService());

        if (isset($container->privates['api_platform.listener.view.validate'])) {
            return $container->privates['api_platform.listener.view.validate'];
        }

        return $container->privates['api_platform.listener.view.validate'] = new \ApiPlatform\Symfony\EventListener\ValidateListener(new \ApiPlatform\Symfony\Validator\Validator(($container->privates['debug.validator'] ?? $container->getDebug_ValidatorService()), ($container->privates['api_platform.filter_locator'] ??= new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [], []))), $a);
    }
}
