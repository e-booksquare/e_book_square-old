<?php

require_once "..\_CONEXAO\conexao.php";
require_once '..\login\class-log.php';
require_once '..\login\logout.php';

$classLogOut = new userLogOut();
$classLogOut->logout();

if (isset($_SESSION['ID_user']) && !empty($_SESSION['ID_user'])) {

    $classLog = new log();
    $dados_usuario = $classLog->logado_usuario($_SESSION['ID_user']);
    $Obra_Usuario = $classLog->Obra_Usuario($_SESSION['ID_user']);
}