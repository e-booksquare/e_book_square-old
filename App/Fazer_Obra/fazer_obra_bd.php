<?php

if( $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['user_FK']) && !empty($_POST['user_FK'])) 
{
    
    $id_obra = filter_input(INPUT_POST,'ID_obra', FILTER_SANITIZE_NUMBER_INT);
    $id_user = filter_input(INPUT_POST,'user_FK', FILTER_SANITIZE_NUMBER_INT);
    $titulo_obra = filter_input(INPUT_POST,'titulo_obra_fazer_obra', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $descr_obra = filter_input(INPUT_POST,'sinopse_fazer_obra', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $etaria_obra = filter_input(INPUT_POST,'etaria', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $categorias_obra = filter_input(INPUT_POST,'categoria', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $categorias_obra = explode(",", $categorias_obra); 
 
    include_once "../_conexao/conexao.php";
    include_once "../login/class-log.php";

    $classLog = new log();

    if($classLog->cadastrar_info_obra($id_obra, $titulo_obra, $id_user, $descr_obra, $etaria_obra, $categorias_obra) == true){
        
        if(isset($_SESSION['ID_user']))
        {
            header("location: escrever.php");
            exit();
        }
        else
        {
         echo "nivel 3 parou";
            // header("location: fazer_obra.php");
            exit();
        }
    }
    else
    {
      echo "nivel 2 parou";
      //   header("location: fazer_obra.php");
        exit();
    }

}
else
{
   echo "nivel 1 parou";
   //  header("location: pre_criacao.php");
    exit();
}



 


        