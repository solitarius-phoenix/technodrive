<?php
return [
    "location" => 'master',
    'controllers' => [
        'factories' => [
            \Administration\src\Controller\TransfertController::class=>\Administration\src\Controller\Factory\TransfertControllerFactory::class,
        ],
    ],
];