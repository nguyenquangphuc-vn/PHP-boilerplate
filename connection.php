

<?php
# connection.php
require_once ('config.php');
class MySQLConnection
{
    private static $instance = NULl;
    public static function getInstance() {
        if (!isset(self::$instance)) {
            try {
                $mysql_host= "localhost";
                $mysql_dbname="";
                $mysql_username="root";
                $mysql_password="";
                self::$instance = new PDO('mysql:host='.$mysql_host.';dbname='.$mysql_dbname, $mysql_username, $mysql_password);
                self::$instance->exec("SET NAMES 'utf8'");
            } catch (PDOException $ex) {
                die($ex->getMessage());
            }
        }
        return self::$instance;
    }
}

$mysql = MySQLConnection::getInstance();