<?php

namespace app\controllers;

use app\models\User;

class AuthController
{

    static function login(){
        $check = 0;
        session_start();
        $user  = User::findByUsername($_POST['username']);

        if($user != NULL){
            if(strcmp($user->getPassword(), $_POST['password']) == 0){
                $_SESSION['username'] = $_POST['username'];
                $check = 1;
                header('Location: ../index.php?controller=pages&action=home');
            }
        }
        if($check == 0){
            header('Location: ../index.php?controller=pages&action=login');
            exit();
        }
    }
    static function logout(){
        unset($_SESSION['username']);
        header('Location: ../index.php');
    }
}