<?php
   include_once 'verificacao2.php';

 if(isset($_POST['seguir']))
 {
     
     global $pdo;
     $AddSeguir_user = array();
     
     $ComandoSQL = "SELECT * FROM seguir WHERE user_FK = :user and seguidor = :sgr limit 1";
     $conn = $pdo->prepare($ComandoSQL);
     $conn->bindValue(":user", $_SESSION['visitar']);
     $conn->bindValue(":sgr", $_SESSION['ID_user']);
     $conn->execute();
     
     if($conn->rowCount() == 0)
     {
            $ComandoSQL = "INSERT INTO seguir (user_FK, seguidor) VALUES (:user, :sgr) limit 1";
            $conn = $pdo->prepare($ComandoSQL);
            $conn->bindValue(":user", $_SESSION['visitar']);
            $conn->bindValue(":sgr", $_SESSION['ID_user']);
            $conn->execute();
    
            header("location: perfil_visitar.php");
            die();
        }
 }



 if(isset($_POST['seguindo']))
 {
         
        global $pdo;
        $AddSeguir_user = array();
        
        $ComandoSQL = "SELECT * FROM seguir WHERE user_FK = :user and seguidor = :sgr limit 1";
        $conn = $pdo->prepare($ComandoSQL);
        $conn->bindValue(":user", $_SESSION['visitar']);
        $conn->bindValue(":sgr", $_SESSION['ID_user']);
        $conn->execute();
    
        if($conn->rowCount() > 0)
        {
            $ComandoSQL = "DELETE FROM seguir WHERE user_FK = :user and seguidor = :sgr limit 1";
            $conn = $pdo->prepare($ComandoSQL);
            $conn->bindValue(":user", $_SESSION['visitar']);
            $conn->bindValue(":sgr", $_SESSION['ID_user']);
            $conn->execute();

            header("location: perfil_visitar.php");
            die();
        }
      
    }

    header("location: perfil_visitar.php?error");
    die();


        