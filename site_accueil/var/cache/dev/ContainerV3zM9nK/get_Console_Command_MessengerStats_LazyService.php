<?php

namespace ContainerV3zM9nK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_MessengerStats_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.messenger_stats.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.console.command.messenger_stats.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('messenger:stats', [], 'Show the message count for one or more transports', false, #[\Closure(name: 'console.command.messenger_stats', class: 'Symfony\\Component\\Messenger\\Command\\StatsCommand')] function () use ($container): \Symfony\Component\Messenger\Command\StatsCommand {
            return ($container->privates['console.command.messenger_stats'] ?? $container->load('getConsole_Command_MessengerStatsService'));
        });
    }
}
