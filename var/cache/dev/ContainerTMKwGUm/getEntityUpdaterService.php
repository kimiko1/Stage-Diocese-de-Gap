<?php

namespace ContainerTMKwGUm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEntityUpdaterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Orm\EntityUpdater' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Orm\EntityUpdater
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Orm/EntityUpdaterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Orm/EntityUpdater.php';

        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityUpdater'] = new \EasyCorp\Bundle\EasyAdminBundle\Orm\EntityUpdater(($container->privates['property_accessor'] ?? self::getPropertyAccessorService($container)), ($container->privates['debug.validator'] ?? self::getDebug_ValidatorService($container)));
    }
}
