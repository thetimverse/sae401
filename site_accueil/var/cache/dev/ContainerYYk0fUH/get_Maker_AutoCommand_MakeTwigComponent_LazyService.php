<?php

<<<<<<< Updated upstream:site_accueil/var/cache/dev/ContainerHJH3Rkp/get_Maker_AutoCommand_MakeTwigComponent_LazyService.php
namespace ContainerHJH3Rkp;
=======
namespace ContainerYYk0fUH;

>>>>>>> Stashed changes:site_accueil/var/cache/dev/ContainerYYk0fUH/get_Maker_AutoCommand_MakeTwigComponent_LazyService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Maker_AutoCommand_MakeTwigComponent_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.maker.auto_command.make_twig_component.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.maker.auto_command.make_twig_component.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('make:twig-component', [], 'Creates a twig (or live) component', false, #[\Closure(name: 'maker.auto_command.make_twig_component', class: 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand')] function () use ($container): \Symfony\Bundle\MakerBundle\Command\MakerCommand {
            return ($container->privates['maker.auto_command.make_twig_component'] ?? $container->load('getMaker_AutoCommand_MakeTwigComponentService'));
        });
    }
}