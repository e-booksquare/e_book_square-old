<?php

 class log{

    public function logar_Usuario($email, $senha){

        global $pdo;

        $ComandoSQL = "SELECT * FROM usuario WHERE email = :e";
        $conn = $pdo->prepare($ComandoSQL);
        $conn->bindValue(":e", $email);
        $conn->execute();
        
        if($conn->rowCount()>0){
            $usuario = array();
            $usuario = $conn->fetch(PDO::FETCH_ASSOC);
            $_SESSION['ID_user'] = $usuario['ID_user'];
            $_SESSION['status'] = $usuario['status'];

            if(password_verify($senha, $usuario['senha']) == false)
            {
                $_SESSION['login_passw_error'] = 'error';
                return false;
            }
            
            return true;

        }

        $_SESSION['login_not_exist_error'] = 'error';
        return false;

        }
    
        

    public function cadastrar_Usuario($nome, $email, $senhaHash, $data_cad){

        global $pdo;

        $ComandoSQL = "SELECT nome, email, senha FROM usuario WHERE email = :e";
        $conn = $pdo->prepare($ComandoSQL);
        // $conn->bindValue(":n", $nome);
        $conn->bindValue(":e", $email);
        $conn->execute();

        if($conn->rowCount() > 0){
            $_SESSION['already_exist_email_error'] = 'error';
            return false;
        }else{  

             echo $codigoCad = $this->cad_cod($nome);

            $ComandoSQL = "INSERT INTO usuario (nome, codigo, email, senha, data_cad) VALUES (:n, :c, :e, :s, :d)";
            $conn = $pdo->prepare($ComandoSQL);
            $conn->bindValue(":n", $nome);
            $conn->bindValue(":c", $codigoCad);
            $conn->bindValue(":e", $email);
            $conn->bindValue(":s", $senhaHash);
            $conn->bindValue(":d", $data_cad);
            $conn->execute();
            return true;
        }
    }

    public function logado_Usuario($id){

        global $pdo;
        $dados_usuario = array();

        $ComandoSQL = "SELECT * FROM usuario WHERE ID_user = :id";
        $conn = $pdo->prepare($ComandoSQL);
        $conn->bindValue(":id", $id);
        $conn->execute();

        if($conn->rowCount()>0){
            $dados_usuario = $conn->fetch(PDO::FETCH_ASSOC);
        }

        return $dados_usuario; 
        
    }

    public function Obra_Usuario($id){

        global $pdo;
        $Obra_Usuario = array();
        
        $ComandoSQL = "SELECT count(obra.ID_obra), obra.nome_obra, 
        obra.descricao, usuario.nome FROM obra INNER JOIN usuario ON obra.user_FK = :u";
        $conn = $pdo->prepare($ComandoSQL);
        $conn->bindValue(":u", $id);
        $conn->execute();

        // $ComandoSQL = "SELECT IDCatFK FROM categoria_da_obra
        //     WHERE IDObraFK LIKE '%29%'";
        //     $conn2 = $pdo->query($ComandoSQL);
        //     $conn2->execute();
        //     $ID_categoria  = $conn2->fetchAll(PDO::FETCH_ASSOC);
        
        // echo "<pre>";
        // var_dump($Obra_Usuario);
        // var_dump($ID_categoria);
        // echo "</pre>";
        // exit;

        if($conn->rowCount()>0){
            $Obra_Usuario = $conn->fetch(PDO::FETCH_ASSOC);
        }

        return $Obra_Usuario;  
    }


    public function criar_Obra($ID_user){

        global $pdo;

        $ComandoSQL = "INSERT INTO obra (user_FK) VALUES (:id_user)";
        $conn = $pdo->prepare($ComandoSQL);
        $conn->bindValue(":id_user", $ID_user);
        $conn->execute();
        
        return true;
    }


    public function recente_Obra($ID_user){

        global $pdo;

        $ComandoSQL = "SELECT MAX(ID_obra) FROM obra WHERE user_FK = :id_user";
        $conn = $pdo->prepare($ComandoSQL);
        $conn->bindValue(":id_user", $ID_user);
        $conn->execute();

        if($conn->rowCount()>0){
            $obra_recente = array();
            $obra_recente = $conn->fetch(PDO::FETCH_ASSOC);
            $_SESSION['ID_obra_recente'] = $obra_recente['MAX(ID_obra)'];

            return true;
        }        
            return false;
    }

    public function cadastrar_info_obra($id_obra, $titulo_obra, $id_user, $descr_obra, $etaria_obra, $categorias_obra){

        global $pdo;

        $ComandoSQL = "UPDATE obra SET nome_obra = :nm_obra, descricao = :dc_obra, etaria = :etr_obra WHERE ID_obra = :id_obra and user_FK = :id_user";
        $conn = $pdo->prepare($ComandoSQL);
        $conn->bindValue(":id_user", $id_user);
        $conn->bindValue(":id_obra", $id_obra);
        $conn->bindValue(":nm_obra", $titulo_obra);
        $conn->bindValue(":dc_obra", $descr_obra);
        $conn->bindValue(":etr_obra", $etaria_obra);
        $conn->execute();

        foreach($categorias_obra as $value){
            $this->categoria_nome = $value;

            
            $ComandoSQL = "SELECT IDCat FROM categoria
            WHERE categoriaCat LIKE '%".$this->categoria_nome."%'";
            $conn2 = $pdo->query($ComandoSQL);
            $conn2->execute();
            $ID_categoria  = $conn2->fetch(PDO::FETCH_ASSOC);

            
            $ComandoSQL = "INSERT INTO categoria_da_obra (IDObraFK, IDCatFK) VALUES (:id_obra, :id_cat)";
            $conn3 = $pdo->prepare($ComandoSQL);
            $conn3->bindValue(":id_obra", $id_obra);
            $conn3->bindValue(":id_cat", $ID_categoria['IDCat']);
            $conn3->execute();
        }
        
        return true;
        
    }


    public function Obra_Usuario_Count($id){

        global $pdo;
        $Obra_Usuario_Count = array();
        
        $ComandoSQL = "SELECT count(ID_obra) FROM obra WHERE user_FK = :u";
        $conn = $pdo->prepare($ComandoSQL);
        $conn->bindValue(":u", $id);
        $conn->execute();

        if($conn->rowCount()>0){
            $Obra_Usuario_Count = $conn->fetch(PDO::FETCH_ASSOC);
        }

        return $Obra_Usuario_Count;  
    }

    public function Seguidor_user($id){

        global $pdo;
        $Seguidor_user = array();
        
        $ComandoSQL = "SELECT count(user_FK) FROM seguir WHERE user_FK = :user";
        $conn = $pdo->prepare($ComandoSQL);
        $conn->bindValue(":user", $id);
        $conn->execute();

        if($conn->rowCount()>0){
            $Seguidor_user = $conn->fetch(PDO::FETCH_ASSOC);
        }

        return $Seguidor_user;  
    }

    public function Seguir_user($id){

        global $pdo;
        $Seguir_user = array();
        
        $ComandoSQL = "SELECT * FROM seguir WHERE user_FK = :user and seguidor = :sgr";
        $conn = $pdo->prepare($ComandoSQL);
        $conn->bindValue(":user", $id);
        $conn->bindValue(":sgr", $_SESSION['ID_user']);
        $conn->execute();

        return $conn->rowCount();  
    }



    function cad_cod($nome){

        global $pdo;
        $code_temp = "@".$nome;
        $codigo = strtolower(str_replace(" ", "", $code_temp));

        $ComandoSQL = "SELECT codigo FROM usuario WHERE codigo = :c";
        $conn = $pdo->prepare($ComandoSQL);
        $conn->bindValue(":c", $codigo);
        $conn->execute();

        if($conn->rowCount()>0){

            $onlyNumbersOfCode = (int) $codigo;
            $newNumber = rand($onlyNumbersOfCode, 200);
            $newCode = $codigo.$newNumber;
            return $newCode;

        }
    
        return $codigo;

    }

    // public function desc_demo_limite($desc){

    //     $limite_chars = 260;

    //     if(strlen($desc) <= $limite_chars)
    //     {
    //        return $desc;
    //     } 
    //     else
    //     {
    //         $new_desc = trim(substr($desc, 0, $limite_chars))." ..."." <a href='#'> Ler mais </a>";
    //         return $new_desc;
    //     } 
    // }
}

