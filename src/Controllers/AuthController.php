<?php

namespace App\Controllers;

use App\Utils\database;

class AuthController extends database
{

    public function loginView()
    {
        return require "src/Views/thanks.php";

    }


    public function login()
    {

        if (isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            if (database::query("SELECT * FROM login WHERE email=:email AND hash_password=:password", array(":email" => $email, ":password" => $password))) {
                if (!isset($_SESSION['email'])) {
                    echo 'hello';
//                return header("Location: /login");

                } else {
                    echo 'fuck u bitch ';

                }
            }
        }
        // TODO if already logged in redirect
        // fetch from db if match $_POST add to session and redirect
        // if doesn't match redirect to register

//        var_dump($_POST);

    }

    public function registerView()
    {
        return require "src/Views/retry.php";
    }

    public function register()
    {
        // validate input types
        // check if user email already registered
        // create user and redirect to home
//        print_r($_POST);
        if (isset($_POST['Submit'])) {
            $email = $_POST['Email'];
            $password = $_POST['pwd'];
            $name = $_POST['Name'];
            if (!database::query("SELECT email FROM login WHERE email=:email", array(':email' => $email))) {

                database::query("INSERT INTO login VALUES ('',:name,:hash_password,:email)", array(':name' => $name, ':email' => $email, ':hash_password' => $password));

                echo 'created';
            } else {
                echo 'this account already existed';
            }
//            return header("Location: /register");

        }
    }
}