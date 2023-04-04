<?php

const DS = DIRECTORY_SEPARATOR;
const PUBLIC_PATH = __DIR__;
define('ROOT_PATH', dirname(PUBLIC_PATH));
const MODULE_PATH = ROOT_PATH . DS . 'module';
const CONFIG_PATH = ROOT_PATH . DS . 'config';

require_once ROOT_PATH . "/vendor/autoload.php";

require_once CONFIG_PATH . DS . 'container.php';