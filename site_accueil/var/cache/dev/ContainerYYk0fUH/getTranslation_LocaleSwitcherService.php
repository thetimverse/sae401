<?php

<<<<<<< Updated upstream:site_accueil/var/cache/dev/ContainerHJH3Rkp/getTranslation_LocaleSwitcherService.php
namespace ContainerHJH3Rkp;
=======
namespace ContainerYYk0fUH;

>>>>>>> Stashed changes:site_accueil/var/cache/dev/ContainerYYk0fUH/getTranslation_LocaleSwitcherService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslation_LocaleSwitcherService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'translation.locale_switcher' shared service.
     *
     * @return \Symfony\Component\Translation\LocaleSwitcher
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/LocaleSwitcher.php';

        return $container->privates['translation.locale_switcher'] = new \Symfony\Component\Translation\LocaleSwitcher('en', new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['slugger'] ??= new \Symfony\Component\String\Slugger\AsciiSlugger('en'));
            yield 1 => ($container->privates['translator.default'] ?? $container->getTranslator_DefaultService());
        }, 2), ($container->privates['router.request_context'] ?? $container->getRouter_RequestContextService()));
    }
}