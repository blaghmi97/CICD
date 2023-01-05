<?php

namespace ContainerQwRrimx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmployeControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\EmployeController' shared autowired service.
     *
     * @return \App\Controller\EmployeController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\EmployeController'] = $instance = new \App\Controller\EmployeController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')), ($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')), ($container->privates['App\\Repository\\WinnersRepository'] ?? $container->load('getWinnersRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\EmployeController', $container));

        return $instance;
    }
}