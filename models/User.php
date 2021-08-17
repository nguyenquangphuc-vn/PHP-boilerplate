<?php

namespace app\models;

use app\utils\DB;

class User
{
    private $username;
    private $password;

    /**
     * @param $username
     * @param $password
     */
    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }
    public static function findAll(){
        $arr = array();
        $db = DB::getInstance();
        $req = $db->query('SELECT * FROM user');
        foreach ($req->fetchAll() as $item) {
            array_push($arr, new User($item['username'], $item['password']));
        }
        return $arr;
    }
    public static function findByUsername($username)
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT * FROM user where username = '" . $username . "'");
        $item = $req->fetchAll();
        return new User($item[0]['username'], $item[0]['password']);
    }



}