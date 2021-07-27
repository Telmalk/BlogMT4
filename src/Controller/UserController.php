<?php


namespace Controller;


class UserController
{
    private $userView;
    private $userModel;

    public function __construct()
    {

    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['page'])) {
            $data = $_POST['page'];
            header("Location: ".\KANDT_ROOT_URI);
            exit;
        }
    }

}