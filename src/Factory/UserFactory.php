<?php


namespace Factory;


use Manager\UserManager;
use View\UserView;

class UserFactory
{
    public static function getManager(): UserManager {
        return new UserManager();
    }

    public static function getModel() {
        return new UserM
    }

    public static function getView() {
        return new UserView();
    }
}