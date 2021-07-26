<?php

namespace Helper;

final class PDOConnexion
{
    private static \PDO $pdo;

    public static function getConnexion(): \PDO
    {
        if (\is_null(self::$pdo)) {
            try {
                self::$pdo = new \PDO("mysql:host=localhost;port=3307;dbname=blog", "adm", "mabite");
                self::$pdo->exec("SET NAMES UTF8");
            } catch (\PDOException $e) {
                die($e->getMessage());
            }
        }
        return self::$pdo;
    }

}