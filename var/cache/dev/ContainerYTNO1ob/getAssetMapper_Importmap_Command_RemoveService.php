<?php

namespace ContainerYTNO1ob;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetMapper_Importmap_Command_RemoveService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'asset_mapper.importmap.command.remove' shared service.
     *
     * @return \Symfony\Component\AssetMapper\Command\ImportMapRemoveCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset-mapper/Command/ImportMapRemoveCommand.php';

        $container->privates['asset_mapper.importmap.command.remove'] = $instance = new \Symfony\Component\AssetMapper\Command\ImportMapRemoveCommand(($container->privates['asset_mapper.importmap.manager'] ?? $container->load('getAssetMapper_Importmap_ManagerService')));

        $instance->setName('importmap:remove');
        $instance->setDescription('Remove JavaScript packages');

        return $instance;
    }
}
