<?php

<<<<<<<< HEAD:site_accueil/var/cache/dev/ContainerHJH3Rkp/getConsole_Command_ValidatorDebugService.php
namespace ContainerHJH3Rkp;
========
namespace ContainerF4yJFeN;

>>>>>>>> main:site_accueil/var/cache/dev/ContainerF4yJFeN/getConsole_Command_ValidatorDebugService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_ValidatorDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.validator_debug' shared service.
     *
     * @return \Symfony\Component\Validator\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Command/DebugCommand.php';

        $container->privates['console.command.validator_debug'] = $instance = new \Symfony\Component\Validator\Command\DebugCommand(($container->privates['debug.validator'] ?? $container->getDebug_ValidatorService()));

        $instance->setName('debug:validator');
        $instance->setDescription('Display validation constraints for classes');

        return $instance;
    }
}