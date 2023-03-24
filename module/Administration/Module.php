<?php

namespace Administration;

use Technodrive\Core\AbstractModule;

class Module extends AbstractModule implements \Technodrive\Core\Interfaces\Module
{

    public function getConfig(): array
    {
        return [
            './config/administration.config.php',
        ];
    }

}