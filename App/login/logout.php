<?php

class userLogOut{
   
    public function logout(){ 
        if(isset($_GET['deslogar']))
        {
            session_destroy();
            header("Location: ../login/login.php");
            die();
        }
    }
}