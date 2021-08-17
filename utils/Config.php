<?php
namespace app\utils;
class Config{
    private static $instance = NULl;
    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = array(
                'mysql_host' => "localhost",
                'mysql_dbname' => "student_management",
                'mysql_username' => 'root',
                'mysql_password' => ''
            );
        }
        return self::$instance;
    }
}
