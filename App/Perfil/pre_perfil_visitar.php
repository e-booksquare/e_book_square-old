<?php
session_start();
if(isset($_GET['id']))
{    
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $_SESSION['visitar'] = $id;
    
    header("Location: perfil_visitar.php");
    exit;
}

