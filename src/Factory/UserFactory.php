<?php


namespace Factory;


use Controller\UserController;
use Manager\UserManager;
use View\UserView;

class UserFactory
{
    public static function getManager(): UserManager {
        return new UserManager();
    }

    public static function getModel() {
        // return new
    }

    public static function getView() {
        return new UserView();
    }

    public static function getController() {
        return new UserController();
    }
}