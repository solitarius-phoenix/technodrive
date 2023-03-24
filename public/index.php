<?php

const DS = DIRECTORY_SEPARATOR;
const PUBLIC_PATH = __DIR__;
define('ROOT_PATH', dirname(PUBLIC_PATH));
const MODULE_PATH = ROOT_PATH . DS . 'module';
const CONFIG_PATH = ROOT_PATH . DS . 'config';

require_once ROOT_PATH . "/vendor/autoload.php";

$bootstrap = new \Technodrive\Core\Bootstrap();
$container = $bootstrap->getContainer();

$request = new \Technodrive\Core\Request();
$response = new \Technodrive\Core\Response();

$router = new \Technodrive\Core\Router($container, $request, $response);
$router->route();

$dispatcher = new \Technodrive\Core\Dispatcher($container, $request, $response);
$dispatcher->dispatch();