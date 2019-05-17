<?php
        $user = 'root';
        $pass = '';
        $dbConnection = new PDO('mysql:host=localhost;dbname=TWJ',$user,$pass);

            $hashed_pass = password_hash("1", PASSWORD_DEFAULT);
            $sql = 'insert into user (username,email,password) values (:username, :email, :password)';

            $username="1";
            $email="1";
            $dateregistered="2019-05-15";

            $pass = $dbConnection->prepare($sql);
            $pass->bindValue(':username',$username);
            $pass->bindValue(':email',$email);
            $pass->bindValue(':password',$hashed_pass);
            $pass->execute();

            