<?php

if( $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['user_FK']) && !empty($_POST['user_FK'])) 
{
    
    $id_FK = filter_input(INPUT_POST,'user_FK', FILTER_SANITIZE_NUMBER_INT);
 
    include_once "../_conexao/conexao.php";
    include_once "../login/class-log.php";

    $classLog = new log();

    if($classLog->criar_Obra($id_FK) == true){
        
        if(isset($_SESSION['ID_user']) && $classLog->recente_Obra($id_FK) == true)
        {
            header("location: fazer_obra.php");
            exit();
        }
        else
        {
         echo "nivel 3 parou";
            // header("location: pre_criacao.php");
            exit();
        }
    }
    else
    {
      echo "nivel 2 parou";
      //   header("location: pre_criacao.php");
        exit();
    }

}
else
{
   echo "nivel 1 parou";
   //  header("location: pre_criacao.php");
    exit();
}