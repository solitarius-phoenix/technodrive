<?php

namespace Administration\src\Controller;

use Technodrive\Core\View\Model\ViewModel;
use Technodrive\Core\ViewStrategy\View;
use Technodrive\Core\AbstractController;

class TransfertController extends AbstractController
{

    public function mainAction(): ViewModel
    {
        $view = new ViewModel([
            'key1'=>'toto',
            'key2'=>['bibi', 'lolo'],
            'key3'=>1
        ]);

        $view->setVariable('key4', 78);
        $view->key5 = 99;

        //$redirectResponse = $this->redirect();
        return $view;
    }

}