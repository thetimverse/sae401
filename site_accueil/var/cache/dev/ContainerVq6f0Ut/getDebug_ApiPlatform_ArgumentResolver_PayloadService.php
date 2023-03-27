<?php

namespace ContainerVq6f0Ut;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_ApiPlatform_ArgumentResolver_PayloadService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'debug.api_platform.argument_resolver.payload' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Symfony/Bundle/ArgumentResolver/CompatibleValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Symfony/Bundle/ArgumentResolver/PayloadArgumentResolver.php';

        $a = ($container->privates['api_platform.metadata.resource.metadata_collection_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataCollectionFactory_CachedService());

        if (isset($container->privates['debug.api_platform.argument_resolver.payload'])) {
            return $container->privates['debug.api_platform.argument_resolver.payload'];
        }

        return $container->privates['debug.api_platform.argument_resolver.payload'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \ApiPlatform\Symfony\Bundle\ArgumentResolver\PayloadArgumentResolver($a, ($container->privates['api_platform.serializer.context_builder.filter'] ?? $container->getApiPlatform_Serializer_ContextBuilder_FilterService())), ($container->privates['debug.stopwatch'] ??= new \Symfony\Component\Stopwatch\Stopwatch(true)));
    }
}
