<?php
namespace Application\Controller\Factory;

use Application\Controller\MockController;
use Technodrive\Core\Interface\ContainerInterface;
use Technodrive\Core\Interface\FactoryInterface;

class MockControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container)
    {
        return new MockController();
    }
}