<?php

<<<<<<<< HEAD:site_accueil/var/cache/dev/ContainerJAhxuxe/getForm_TypeGuesser_ValidatorService.php
namespace ContainerJAhxuxe;

========
namespace ContainerM2igHfU;
>>>>>>>> tim:site_accueil/var/cache/dev/ContainerM2igHfU/getForm_TypeGuesser_ValidatorService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_TypeGuesser_ValidatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.type_guesser.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/ValidatorTypeGuesser.php';

        return $container->privates['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser(($container->privates['debug.validator'] ?? $container->getDebug_ValidatorService()));
    }
}
