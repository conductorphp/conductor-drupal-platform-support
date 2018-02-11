<?php

namespace ConductorDrupalPlatformSupport;

return [
    'factories' => [
        \ConductorAppOrchestration\MaintenanceStrategy\MaintenanceStrategyInterface::class => AppMaintenanceStrategyFactory::class,
    ],
];
