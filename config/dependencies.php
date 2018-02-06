<?php

namespace DevopsToolDrupalPlatformSupport;

return [
    'factories' => [
        \DevopsToolAppOrchestration\MaintenanceStrategy\MaintenanceStrategyInterface::class => AppMaintenanceStrategyFactory::class,
    ],
];
