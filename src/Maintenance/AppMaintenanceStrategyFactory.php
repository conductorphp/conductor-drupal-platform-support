<?php

namespace ConductorDrupalPlatformSupport\Maintenance;

use ConductorAppOrchestration\Config\ApplicationConfig;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Psr\Container\ContainerInterface;

class AppMaintenanceStrategyFactory implements FactoryInterface
{
    public function __invoke(
        ContainerInterface $container,
        $requestedName,
        ?array $options = null
    ): AppMaintenanceStrategy {
        $applicationConfig = $container->get(ApplicationConfig::class);
        return new AppMaintenanceStrategy($applicationConfig);
    }

}

