<?php
use \Technodrive\Core\Application;

$mainConfig = CONFIG_PATH . DS . 'technodrive.config.php';

//@todo check if file exists and add a developpement config

$mainConfig = require_once $mainConfig;

Application::init($mainConfig);