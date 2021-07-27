<?php


namespace Controller;


use Factory\UserFactory;
use Manager\UserManager;
use View\UserView;

class UserController
{
    private UserView $userView;
    private UserManager $userManager;

    public function __construct()
    {
        $this->userManager = UserFactory::getManager();
        $this->userView = UserFactory::getView();
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['user'])) {
            $data = $_POST["user"];
            if ($data["password"] !== $data["repeatPassword"]) {
                throw new \HttpRequestException("Les mots de passe ne correspondent pas");
            }
            $model = UserFactory::getModel();
            var_dump($_POST["user"]);
            $model->setPseudo($data["pseudo"]);
            $model->setPassword($data("password"));
            exit;
        } else {
             $this->userView->formAdd();
        }
    }

}