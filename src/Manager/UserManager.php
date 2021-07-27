<?php

namespace Manager;

use Helper\AbstractModel;
use Model\UserModel;

class UserManager extends AbstractModel
{
    public function addUser(UserModel $userModel): int
    {
        $sql = 'INSERT INTO users SET `pseudo` = :pseudo, `password` = :password;';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":pseudo", $userModel->getPseudo());
        $stmt->bindValue(":password", $userModel->getPassword());
        $stmt->execute();
        if ($stmt->errorCode() != "00000") {
            echo $stmt->errorInfo()[1];
            throw new \Exception($stmt->errorInfo()[1]);
        }
        return $this->pdo->lastInsertId();
    }

    public function getUser()
    {

    }

    public function deleteUser()
    {

    }
}