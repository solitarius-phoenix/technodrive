<?php

namespace Administration\src\Controller\Factory;

use Administration\src\Controller\TransfertController;
use Technodrive\Core\Container;
use Technodrive\Core\Interfaces\FactoryInterface;

class TransfertControllerFactory implements FactoryInterface
{
    public function __invoke(Container $container, ?string $controllerName = null): TransfertController
    {
        return new TransfertController();
    }

}