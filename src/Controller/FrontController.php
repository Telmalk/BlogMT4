<?php

namespace Controller;

class FrontController
{
    public function __construct()
    {
        \session_start();
        $action = $_POST["action"] ?? $_GET["action"] ?? '';
        switch ($action) {
            case "article.show":
                break;
            case "article.delete":
                break;
            case "article.add":
                break;
            case "user.add":
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