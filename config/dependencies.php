<?php

namespace ConductorDrupalPlatformSupport;

return [
    'factories' => [
        \ConductorAppOrchestration\Maintenance\MaintenanceStrategyInterface::class => AppMaintenanceStrategyFactory::class,
    ],
];
