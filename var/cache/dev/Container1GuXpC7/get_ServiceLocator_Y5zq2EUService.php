<?php

namespace Container1GuXpC7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Y5zq2EUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Y5zq2EU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Y5zq2EU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'formationR' => ['privates', '.errored..service_locator.Y5zq2EU.app\\Repository\\FormationRepository', NULL, 'Cannot autowire service ".service_locator.Y5zq2EU": it references class "app\\Repository\\FormationRepository" but no such service exists. Did you mean "App\\Repository\\FormationRepository"?'],
        ], [
            'formationR' => 'app\\Repository\\FormationRepository',
        ]);
    }
}
