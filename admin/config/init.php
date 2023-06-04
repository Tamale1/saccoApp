<?php
//start session
session_start();
//config file
require_once 'config.php';
//include helpers
require_once 'Helpers/system-helper.php';

//Auto loader

spl_autoload_register(function($class_name){

    require_once 'lib/'.$class_name. '.php';

});   

