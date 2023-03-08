<?php

if( $_SERVER['REQUEST_METHOD'] == 'POST' 
    && isset($_POST['email']) && !empty($_POST['email']) 
    && isset($_POST['senha']) && !empty($_POST['senha']))
{
    
    $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
    $senhaLogin = filter_input(INPUT_POST,'senha', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
 
    include_once "../_conexao/conexao.php";
    include_once "class-log.php";

    $classLog = new log();

    if($classLog->logar_Usuario($email, $senhaLogin) == true){
        
        if(isset($_SESSION['ID_user']))
        {
            header("location: ../Perfil/Perfil.php");
            exit();
        }
        else
        {
            header("location: ../Perfil/Perfil.php");
            exit();
        }
    }
    else
    {
        header("location: login.php");
        exit();
    }

}
else
{
    header("location: login.php");
    exit();
}