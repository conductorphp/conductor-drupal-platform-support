<?php

return [
    'snapshot'      => [
        'asset_groups'          => [
            'core'           => [
                '/css',
                '/config_*',
                '/js',
                '/php/twig',
            ],
            'common_modules' => [],
        ],
        'database_table_groups' => [
            'core'           => [
                'cache_bootstrap',
                'cache_config',
                'cache_container',
                'cache_data',
                'cache_default',
                'cache_discovery',
                'cache_dynamic_page_cache',
                'cache_entity',
                'cache_library',
                'cache_menu',
                'cache_render',
                'cache_toolbar',
            ],
            'common_modules' => [],
        ],
    ],
    'template_vars' => [
        'database_host'         => 'localhost',
        'database_port'         => 3306,
        'database_table_prefix' => '',
    ],
];
