<?php


use Controller\FrontController;
use \Helper\PDOConnexion;

require_once "../vendor/autoload.php";


$pdo = PDOConnexion::getConnexion();
$router = new FrontController();
