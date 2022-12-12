<?php
    //Load Config File
    require_once 'config/config.php';

    //Autoload Core libraries
    spl_autoload_register(function($className){
        require_once 'lib/' . $className . '.php'; 
    });