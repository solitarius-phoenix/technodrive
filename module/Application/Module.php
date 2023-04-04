<?php

namespace Application;

/**
 *
 */
class Module
{

    /**
     * @return string[]
     */
    public function getConfig(): array
    {
        return [
            __DIR__ . '/config/application.config.php',
        ];
    }

}