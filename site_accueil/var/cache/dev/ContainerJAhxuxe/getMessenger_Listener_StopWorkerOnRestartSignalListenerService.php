<?php

<<<<<<<< HEAD:site_accueil/var/cache/dev/ContainerJAhxuxe/getMessenger_Listener_StopWorkerOnRestartSignalListenerService.php
namespace ContainerJAhxuxe;

========
namespace ContainerM2igHfU;
>>>>>>>> tim:site_accueil/var/cache/dev/ContainerM2igHfU/getMessenger_Listener_StopWorkerOnRestartSignalListenerService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Listener_StopWorkerOnRestartSignalListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.listener.stop_worker_on_restart_signal_listener' shared service.
     *
     * @return \Symfony\Component\Messenger\EventListener\StopWorkerOnRestartSignalListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/EventListener/StopWorkerOnRestartSignalListener.php';

        return $container->privates['messenger.listener.stop_worker_on_restart_signal_listener'] = new \Symfony\Component\Messenger\EventListener\StopWorkerOnRestartSignalListener(($container->privates['cache.messenger.restart_workers_signal'] ?? $container->getCache_Messenger_RestartWorkersSignalService()), ($container->privates['monolog.logger.messenger'] ?? $container->load('getMonolog_Logger_MessengerService')));
    }
}
