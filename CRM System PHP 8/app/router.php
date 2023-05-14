<?php


class Router{
    public function Run(){
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';

        switch($page){
            case 'users':
                $controller = new UsersController();
                $controller->index();
                break;
            default:
                http_response_code(404);
                echo "Page not faund";
        }
    }
}