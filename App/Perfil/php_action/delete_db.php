<?php
require_once "../../_conexao/conexao.php";
require_once '../../login/class-log.php';

$classLog = new log();
$dados_usuario = $classLog->logado_usuario($_SESSION['ID_user']);

$pasta = "../../assets/IMAGEM_USUARIO/";

if(isset($_GET['del']) && isset($_SESSION['ID_user']) && $_GET['del'] == 2)
{

    if(isset($dados_usuario['banner']) && !empty($dados_usuario['banner']))
    {

        $bannerDeleteFromBD = $dados_usuario['banner'];
        unlink($pasta.$bannerDeleteFromBD);

        $SQL =  " UPDATE usuario SET banner = :bnr WHERE ID_user = :id LIMIT 1";
        $conn = $pdo->prepare($SQL);
        $conn->bindValue(":bnr", null);
        $conn->bindValue(":id", $_SESSION['ID_user']);
        $conn->execute();

    }

    header("location: ../editar_perfil.php");
    die();
}



if(isset($_GET['del']) && isset($_SESSION['ID_user']) && $_GET['del'] == 1)
{

    if(isset($dados_usuario['foto']) && !empty($dados_usuario['foto']))
    {

        $fotoDeleteFromBD = $dados_usuario['foto'];
        unlink($pasta.$fotoDeleteFromBD);

        $SQL = "UPDATE usuario SET foto = :f WHERE ID_user = :id LIMIT 1";
        $conn = $pdo->prepare($SQL);
        $conn->bindValue(":f", null);
        $conn->bindValue(":id", $_SESSION['ID_user']);
        $conn->execute();
    }

    header("location: ../editar_perfil.php");
    die();
}
    
