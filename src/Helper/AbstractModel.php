<?php


namespace Helper;


abstract class AbstractModel
{
    protected \PDO $pdo;

    public function __construct()
    {
        $this->setPdo();
        $this->pdo = $this->getPdo();
    }

    private function setPdo()
    {
         $this->pdo = PDOConnexion::getConnexion();
    }

    protected function getPdo(): \PDO {
        return $this->pdo;
    }

}