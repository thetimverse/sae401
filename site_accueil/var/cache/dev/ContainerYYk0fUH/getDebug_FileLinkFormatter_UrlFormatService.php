<?php

<<<<<<< Updated upstream:site_accueil/var/cache/dev/ContainerHJH3Rkp/getDebug_FileLinkFormatter_UrlFormatService.php
namespace ContainerHJH3Rkp;
=======
namespace ContainerYYk0fUH;

>>>>>>> Stashed changes:site_accueil/var/cache/dev/ContainerYYk0fUH/getDebug_FileLinkFormatter_UrlFormatService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_FileLinkFormatter_UrlFormatService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'debug.file_link_formatter.url_format' shared service.
     *
     * @return \string
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->privates['debug.file_link_formatter.url_format'])) {
            return $container->privates['debug.file_link_formatter.url_format'];
        }

        return $container->privates['debug.file_link_formatter.url_format'] = \Symfony\Component\HttpKernel\Debug\FileLinkFormatter::generateUrlFormat($a, '_profiler_open_file', '?file=%f&line=%l#line%l');
    }
}