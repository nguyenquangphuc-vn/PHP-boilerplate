<?php
namespace app\utils;
use PDO;
class DB
{
    private static $instance = NULl;
    public static function getInstance() {
        if (!isset(self::$instance)) {
            try {

                self::$instance = new PDO(
                    'mysql:host='
                    .Config::getInstance()['mysql_host']
                    .';dbname='.Config::getInstance()['mysql_dbname'],
                    Config::getInstance()['mysql_username'],
                    Config::getInstance()['mysql_password']
                );
                self::$instance->exec("SET NAMES 'utf8'");
            } catch (PDOException $ex) {
                die($ex->getMessage());
            }
        }
        return self::$instance;
    }
}