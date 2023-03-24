<?php

namespace Application;

class Module implements \Technodrive\Core\Interfaces\Module
{

    public function getConfig(): array
    {
        return [
            './config/application.config.php',
        ];
    }

}