<?php

namespace ContainerYTNO1ob;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CVv4WSFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CVv4WSF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CVv4WSF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => ['privates', '.service_locator.t7nLwyX', 'get_ServiceLocator_T7nLwyXService', true],
            'App\\Controller\\Admin\\EventCrudController::autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\EventCrudController::batchDelete' => ['privates', '.service_locator.twrFs.m', 'get_ServiceLocator_TwrFs_MService', true],
            'App\\Controller\\Admin\\EventCrudController::configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\Admin\\EventCrudController::configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\Admin\\EventCrudController::configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\Admin\\EventCrudController::configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\Admin\\EventCrudController::configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\Admin\\EventCrudController::createEditForm' => ['privates', '.service_locator.Lazlz4J', 'get_ServiceLocator_Lazlz4JService', true],
            'App\\Controller\\Admin\\EventCrudController::createEditFormBuilder' => ['privates', '.service_locator.Lazlz4J', 'get_ServiceLocator_Lazlz4JService', true],
            'App\\Controller\\Admin\\EventCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.lng3o3t', 'get_ServiceLocator_Lng3o3tService', true],
            'App\\Controller\\Admin\\EventCrudController::createNewForm' => ['privates', '.service_locator.Lazlz4J', 'get_ServiceLocator_Lazlz4JService', true],
            'App\\Controller\\Admin\\EventCrudController::createNewFormBuilder' => ['privates', '.service_locator.Lazlz4J', 'get_ServiceLocator_Lazlz4JService', true],
            'App\\Controller\\Admin\\EventCrudController::delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\EventCrudController::deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\EventCrudController::detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\EventCrudController::edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\EventCrudController::index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\EventCrudController::new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\EventCrudController::persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\EventCrudController::renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\EventCrudController::updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\PillarsCrudController::autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PillarsCrudController::batchDelete' => ['privates', '.service_locator.twrFs.m', 'get_ServiceLocator_TwrFs_MService', true],
            'App\\Controller\\Admin\\PillarsCrudController::configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\Admin\\PillarsCrudController::configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\Admin\\PillarsCrudController::configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\Admin\\PillarsCrudController::configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\Admin\\PillarsCrudController::configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\Admin\\PillarsCrudController::createEditForm' => ['privates', '.service_locator.Lazlz4J', 'get_ServiceLocator_Lazlz4JService', true],
            'App\\Controller\\Admin\\PillarsCrudController::createEditFormBuilder' => ['privates', '.service_locator.Lazlz4J', 'get_ServiceLocator_Lazlz4JService', true],
            'App\\Controller\\Admin\\PillarsCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.lng3o3t', 'get_ServiceLocator_Lng3o3tService', true],
            'App\\Controller\\Admin\\PillarsCrudController::createNewForm' => ['privates', '.service_locator.Lazlz4J', 'get_ServiceLocator_Lazlz4JService', true],
            'App\\Controller\\Admin\\PillarsCrudController::createNewFormBuilder' => ['privates', '.service_locator.Lazlz4J', 'get_ServiceLocator_Lazlz4JService', true],
            'App\\Controller\\Admin\\PillarsCrudController::delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PillarsCrudController::deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\PillarsCrudController::detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PillarsCrudController::edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PillarsCrudController::index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PillarsCrudController::new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PillarsCrudController::persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\PillarsCrudController::renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PillarsCrudController::updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\QuotesCrudController::autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\QuotesCrudController::batchDelete' => ['privates', '.service_locator.twrFs.m', 'get_ServiceLocator_TwrFs_MService', true],
            'App\\Controller\\Admin\\QuotesCrudController::configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\Admin\\QuotesCrudController::configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\Admin\\QuotesCrudController::configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\Admin\\QuotesCrudController::configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\Admin\\QuotesCrudController::configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\Admin\\QuotesCrudController::createEditForm' => ['privates', '.service_locator.Lazlz4J', 'get_ServiceLocator_Lazlz4JService', true],
            'App\\Controller\\Admin\\QuotesCrudController::createEditFormBuilder' => ['privates', '.service_locator.Lazlz4J', 'get_ServiceLocator_Lazlz4JService', true],
            'App\\Controller\\Admin\\QuotesCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.lng3o3t', 'get_ServiceLocator_Lng3o3tService', true],
            'App\\Controller\\Admin\\QuotesCrudController::createNewForm' => ['privates', '.service_locator.Lazlz4J', 'get_ServiceLocator_Lazlz4JService', true],
            'App\\Controller\\Admin\\QuotesCrudController::createNewFormBuilder' => ['privates', '.service_locator.Lazlz4J', 'get_ServiceLocator_Lazlz4JService', true],
            'App\\Controller\\Admin\\QuotesCrudController::delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\QuotesCrudController::deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\QuotesCrudController::detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\QuotesCrudController::edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\QuotesCrudController::index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\QuotesCrudController::new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\QuotesCrudController::persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\QuotesCrudController::renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\QuotesCrudController::updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\EventController::index' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => ['privates', '.service_locator.t7nLwyX', 'get_ServiceLocator_T7nLwyXService', true],
            'App\\Controller\\Admin\\EventCrudController:autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\EventCrudController:batchDelete' => ['privates', '.service_locator.twrFs.m', 'get_ServiceLocator_TwrFs_MService', true],
            'App\\Controller\\Admin\\EventCrudController:configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\Admin\\EventCrudController:configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\Admin\\EventCrudController:configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\Admin\\EventCrudController:configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\Admin\\EventCrudController:configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\Admin\\EventCrudController:createEditForm' => ['privates', '.service_locator.Lazlz4J', 'get_ServiceLocator_Lazlz4JService', true],
            'App\\Controller\\Admin\\EventCrudController:createEditFormBuilder' => ['privates', '.service_locator.Lazlz4J', 'get_ServiceLocator_Lazlz4JService', true],
            'App\\Controller\\Admin\\EventCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.lng3o3t', 'get_ServiceLocator_Lng3o3tService', true],
            'App\\Controller\\Admin\\EventCrudController:createNewForm' => ['privates', '.service_locator.Lazlz4J', 'get_ServiceLocator_Lazlz4JService', true],
            'App\\Controller\\Admin\\EventCrudController:createNewFormBuilder' => ['privates', '.service_locator.Lazlz4J', 'get_ServiceLocator_Lazlz4JService', true],
            'App\\Controller\\Admin\\EventCrudController:delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\EventCrudController:deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\EventCrudController:detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\EventCrudController:edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\EventCrudController:index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\EventCrudController:new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\EventCrudController:persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\EventCrudController:renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\EventCrudController:updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\PillarsCrudController:autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PillarsCrudController:batchDelete' => ['privates', '.service_locator.twrFs.m', 'get_ServiceLocator_TwrFs_MService', true],
            'App\\Controller\\Admin\\PillarsCrudController:configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\Admin\\PillarsCrudController:configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\Admin\\PillarsCrudController:configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\Admin\\PillarsCrudController:configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\Admin\\PillarsCrudController:configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\Admin\\PillarsCrudController:createEditForm' => ['privates', '.service_locator.Lazlz4J', 'get_ServiceLocator_Lazlz4JService', true],
            'App\\Controller\\Admin\\PillarsCrudController:createEditFormBuilder' => ['privates', '.service_locator.Lazlz4J', 'get_ServiceLocator_Lazlz4JService', true],
            'App\\Controller\\Admin\\PillarsCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.lng3o3t', 'get_ServiceLocator_Lng3o3tService', true],
            'App\\Controller\\Admin\\PillarsCrudController:createNewForm' => ['privates', '.service_locator.Lazlz4J', 'get_ServiceLocator_Lazlz4JService', true],
            'App\\Controller\\Admin\\PillarsCrudController:createNewFormBuilder' => ['privates', '.service_locator.Lazlz4J', 'get_ServiceLocator_Lazlz4JService', true],
            'App\\Controller\\Admin\\PillarsCrudController:delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PillarsCrudController:deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\PillarsCrudController:detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PillarsCrudController:edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PillarsCrudController:index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PillarsCrudController:new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PillarsCrudController:persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\PillarsCrudController:renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\PillarsCrudController:updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\QuotesCrudController:autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\QuotesCrudController:batchDelete' => ['privates', '.service_locator.twrFs.m', 'get_ServiceLocator_TwrFs_MService', true],
            'App\\Controller\\Admin\\QuotesCrudController:configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\Admin\\QuotesCrudController:configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\Admin\\QuotesCrudController:configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\Admin\\QuotesCrudController:configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\Admin\\QuotesCrudController:configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\Admin\\QuotesCrudController:createEditForm' => ['privates', '.service_locator.Lazlz4J', 'get_ServiceLocator_Lazlz4JService', true],
            'App\\Controller\\Admin\\QuotesCrudController:createEditFormBuilder' => ['privates', '.service_locator.Lazlz4J', 'get_ServiceLocator_Lazlz4JService', true],
            'App\\Controller\\Admin\\QuotesCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.lng3o3t', 'get_ServiceLocator_Lng3o3tService', true],
            'App\\Controller\\Admin\\QuotesCrudController:createNewForm' => ['privates', '.service_locator.Lazlz4J', 'get_ServiceLocator_Lazlz4JService', true],
            'App\\Controller\\Admin\\QuotesCrudController:createNewFormBuilder' => ['privates', '.service_locator.Lazlz4J', 'get_ServiceLocator_Lazlz4JService', true],
            'App\\Controller\\Admin\\QuotesCrudController:delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\QuotesCrudController:deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\QuotesCrudController:detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\QuotesCrudController:edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\QuotesCrudController:index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\QuotesCrudController:new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\QuotesCrudController:persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\QuotesCrudController:renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\QuotesCrudController:updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\EventController:index' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => '?',
            'App\\Controller\\Admin\\EventCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\EventCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\EventCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\EventCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\EventCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\EventCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\EventCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\EventCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\EventCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\EventCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\EventCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\EventCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\EventCrudController::delete' => '?',
            'App\\Controller\\Admin\\EventCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\EventCrudController::detail' => '?',
            'App\\Controller\\Admin\\EventCrudController::edit' => '?',
            'App\\Controller\\Admin\\EventCrudController::index' => '?',
            'App\\Controller\\Admin\\EventCrudController::new' => '?',
            'App\\Controller\\Admin\\EventCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\EventCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\EventCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\PillarsCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\PillarsCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\PillarsCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\PillarsCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\PillarsCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\PillarsCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\PillarsCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\PillarsCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\PillarsCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\PillarsCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\PillarsCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\PillarsCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\PillarsCrudController::delete' => '?',
            'App\\Controller\\Admin\\PillarsCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\PillarsCrudController::detail' => '?',
            'App\\Controller\\Admin\\PillarsCrudController::edit' => '?',
            'App\\Controller\\Admin\\PillarsCrudController::index' => '?',
            'App\\Controller\\Admin\\PillarsCrudController::new' => '?',
            'App\\Controller\\Admin\\PillarsCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\PillarsCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\PillarsCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\QuotesCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\QuotesCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\QuotesCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\QuotesCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\QuotesCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\QuotesCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\QuotesCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\QuotesCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\QuotesCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\QuotesCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\QuotesCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\QuotesCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\QuotesCrudController::delete' => '?',
            'App\\Controller\\Admin\\QuotesCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\QuotesCrudController::detail' => '?',
            'App\\Controller\\Admin\\QuotesCrudController::edit' => '?',
            'App\\Controller\\Admin\\QuotesCrudController::index' => '?',
            'App\\Controller\\Admin\\QuotesCrudController::new' => '?',
            'App\\Controller\\Admin\\QuotesCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\QuotesCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\QuotesCrudController::updateEntity' => '?',
            'App\\Controller\\EventController::index' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => '?',
            'App\\Controller\\Admin\\EventCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\EventCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\EventCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\EventCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\EventCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\EventCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\EventCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\EventCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\EventCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\EventCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\EventCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\EventCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\EventCrudController:delete' => '?',
            'App\\Controller\\Admin\\EventCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\EventCrudController:detail' => '?',
            'App\\Controller\\Admin\\EventCrudController:edit' => '?',
            'App\\Controller\\Admin\\EventCrudController:index' => '?',
            'App\\Controller\\Admin\\EventCrudController:new' => '?',
            'App\\Controller\\Admin\\EventCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\EventCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\EventCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\PillarsCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\PillarsCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\PillarsCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\PillarsCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\PillarsCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\PillarsCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\PillarsCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\PillarsCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\PillarsCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\PillarsCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\PillarsCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\PillarsCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\PillarsCrudController:delete' => '?',
            'App\\Controller\\Admin\\PillarsCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\PillarsCrudController:detail' => '?',
            'App\\Controller\\Admin\\PillarsCrudController:edit' => '?',
            'App\\Controller\\Admin\\PillarsCrudController:index' => '?',
            'App\\Controller\\Admin\\PillarsCrudController:new' => '?',
            'App\\Controller\\Admin\\PillarsCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\PillarsCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\PillarsCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\QuotesCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\QuotesCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\QuotesCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\QuotesCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\QuotesCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\QuotesCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\QuotesCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\QuotesCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\QuotesCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\QuotesCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\QuotesCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\QuotesCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\QuotesCrudController:delete' => '?',
            'App\\Controller\\Admin\\QuotesCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\QuotesCrudController:detail' => '?',
            'App\\Controller\\Admin\\QuotesCrudController:edit' => '?',
            'App\\Controller\\Admin\\QuotesCrudController:index' => '?',
            'App\\Controller\\Admin\\QuotesCrudController:new' => '?',
            'App\\Controller\\Admin\\QuotesCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\QuotesCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\QuotesCrudController:updateEntity' => '?',
            'App\\Controller\\EventController:index' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
