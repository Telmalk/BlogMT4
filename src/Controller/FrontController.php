<?php

namespace Controller;

use Factory\UserFactory;

class FrontController
{
    public function __construct()
    {
        \session_start();
        $action = $_POST["action"] ?? $_GET["action"] ?? '';
        switch ($action) {
            case "article.show":
                echo "HAAAAAAAAAAAAAAa";
                break;
            case "article.delete":
                break;
            case "article.add":
                break;
            case "user.add":
                $userController = UserFactory::getController();
                $userController->add();
                break;
            case "user.login":
                $userController = UserFactory::getController();
                $userController->login();
                break;
            case "user.update":
                break;
            case "comment.add":
                break;
            case "article.index":
                echo "Coucou";
                break;
            default:
                echo "Coucou";
        }
    }
}