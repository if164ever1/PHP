<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require_once 'app/database.php';
    
    require_once 'app/models/User.php';

    require_once 'app/controllers/users/UsersController.php';
    require_once 'app/controllers/users/AuthController.php';

    require_once 'app/router.php';
    

    $router = new Router();
    $router->Run();