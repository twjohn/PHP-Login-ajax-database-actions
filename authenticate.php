<?php
session_start();
include_once("redirect.php");

class authenticate{
    public function login(){

        $user = 'root';
        $pass = '';
        $dbConnection = new PDO('mysql:host=localhost;dbname=TWJ',$user,$pass);

        if(isset($_POST['login']) && isset($_POST['username']) && isset($_POST['password'])){

            $sql = 'select password, username from user where username=:username';

            $Pass = $dbConnection->prepare($sql);
            $Pass->bindValue(':username',$_POST['username']);
            $Pass->execute();

            $userinfo = $Pass->fetch(PDO::FETCH_ASSOC);

            $verify=password_verify($_POST['password'],$userinfo['password']);

            if($verify){
                if($userinfo['username'] == $_POST['username']){
                    $_SESSION['username'] = $_POST['username'];
                    $redirect = new redirect();
                    $redirect->goToHome();
                }
                else
                    echo "Invalid username or password";
            }
            else
                echo "Invalid username or password";
        }  
    }    
}

