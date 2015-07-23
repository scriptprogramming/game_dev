<?php

class Database {

    private static $dsn = 'mysql:dbname=skriptprog;host=127.0.0.1';
    private static $user = 'root';
    private static $password = '';

    public static function getInstance() {
        return new PDO(self::$dsn, self::$user, self::$password);
    }

}
