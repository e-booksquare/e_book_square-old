<?php

require_once "../_conexao/conexao.php";;
require_once 'class-log.php';
require_once 'logout.php';

$classLogOut = new userLogOut();
$classLogOut->logout();

if(isset($_SESSION['ID_user']) && !empty($_SESSION['ID_user'])){
    
    $classLog = new log();
    $dados_usuario = $classLog->logado_usuario($_SESSION['ID_user']);
} 
// else {
//     header("location: login.php");
//     exit();
// }

