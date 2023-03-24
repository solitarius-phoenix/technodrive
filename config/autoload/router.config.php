<?php

use Administration\src\Controller\TransfertController;

return [
    'Routes'=> [
        'home'=>[
            'path'=>'/',
            'module'=>'Application',
            'controller'=> TransfertController::class,
            'action'=>'main',
        ],
        'transfert'=>[
            'path'=>'transfert',
            'module'=>'Application',
            'controller'=> TransfertController::class,
            'action'=>'main',
        ],
        'transfertdata'=>[
            'path'=>'transfert/data',
            'module'=>'Application',
            'controller'=> TransfertController::class,
            'action'=>'main2',
        ],
        'transfertdatawithparameter'=>[
            'path'=>'transfert/:param1/data',
            'module'=>'Application',
            'controller'=> TransfertController::class,
            'action'=>'main3',
        ],
        'transfertdatawithparameters'=>[
            'path'=>'transfert/:param1/data/:param2/:param3/:param4/:param5',
            'module'=>'Application',
            'controller'=> TransfertController::class,
            'action'=>'main3',
        ],

    ],
];
