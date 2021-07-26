<?php

namespace Helper;

final class PDOConnexion
{
    private static $pdo;

    public static function getConnexion(): \PDO
    {
        if (\is_null(self::$pdo)) {
            try {
                self::$pdo = new \PDO('mysql:host=127.0.0.1;port=3306;dbname=blog;charset=utf8',"adm", "root");
            } catch (\PDOException $e) {
                echo "ça die ";
                die($e->getMessage());
            }
        }
        return self::$pdo;
    }

}