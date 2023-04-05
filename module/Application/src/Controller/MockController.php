<?php

namespace Application\Controller;

use Technodrive\Mvc\AbstractController;
use Technodrive\Mvc\ViewModel;

class MockController extends AbstractController
{
    public function indexAction(): ViewModel
    {
        return new ViewModel([
            'header'=>'test1',
            'body'=>'test2',
        ]);
    }
}