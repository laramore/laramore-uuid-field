<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default uuid types
    |--------------------------------------------------------------------------
    |
    | This option defines the default uuid types used by fields.
    |
    */

    'configurations' => [
        'uuid' => [
            'default_rules' => [
                'visible', 'fillable',
            ],
            'default_migration_type' => 'binaryUuid',
            'migration_type' => 'binaryUuid',
            'migration_property_keys' => [
                'nullable', 'default',
            ],
        ],
        'primary_uuid' => [
            'default_rules' => [
                'visible', 'auto_generate',
            ],
            'default_migration_type' => 'primaryUuid',
            'migration_type' => 'primaryUuid',
            'migration_property_keys' => [
                'nullable', 'default',
            ],
        ],
        'foreign_uuid' => [
            'default_rules' => [
                'visible', 'fillable',
            ],
            'migration_property_keys' => [
                'nullable', 'default',
            ],
        ],
    ],

];
