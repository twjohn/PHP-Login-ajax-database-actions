<?php

class dbConnect{
    protected $user;
    protected $pass;
    protected $dbConection;

    public function dbConnect(){
        $user = 'root';
        $pass = '';
        $dbConnection = new PDO('mysql:host=localhost;dbname=TWJ',$user,$pass);
    }
}