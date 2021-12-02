<?php

return [

    'namespace' => env('INTERACTION_COMPONENT_NAMESPACE', 'interaction-management'),

    'models' => [
        'interaction' => VCComponent\Laravel\Interaction\Entities\Interaction::class,
    ],

    'auth_middleware' => [
        'admin' => [
            'middleware' => '',
            'except' => [],
        ],
        'frontend' => [
            'middleware' => '',
            'except' => [],
        ],
    ],

];
