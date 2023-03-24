<?php
return [
    'view_helpers' => [
        'factories' => [
            \Technodrive\Core\View_helpers\DoctypeHelper::class=>\Technodrive\Core\View_helpers\Factories\DoctypeHelperFactory::class,
        ],
        'alias' => [
            'doctype'=>\Technodrive\Core\View_helpers\DoctypeHelper::class,
        ]
    ],
    'controller_plugins' => [
        'factories' => [
            \Technodrive\Core\Controllers_plugins\RedirectPlugin::class=>\Technodrive\Core\Controllers_plugins\Factories\RedirectPluginFactory::class,
        ],
        'alias' => [
            'redirect'=>\Technodrive\Core\Controllers_plugins\RedirectPlugin::class,
        ]
    ],
];
