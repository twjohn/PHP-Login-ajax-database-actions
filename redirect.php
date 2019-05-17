<?php

class redirect{

    public function goToHome(){
        header("location: home.php");
        exit;
    }

}