<?php

class log
{

    public function logar_Usuario($email, $senha)
    {

        global $pdo;

        $ComandoSQL = "SELECT * FROM usuario WHERE email = :e";
        $conn = $pdo->prepare($ComandoSQL);
        $conn->bindValue(":e", $email);
        $conn->execute();

        if ($conn->rowCount() > 0) {
            $usuario = array();
            $usuario = $conn->fetch(PDO::FETCH_ASSOC);
            $_SESSION['ID_user'] = $usuario['ID_user'];
            $_SESSION['status'] = $usuario['status'];

            if (password_verify($senha, $usuario['senha']) == false) {
                $_SESSION['login_passw_error'] = 'error';
                return false;
            }

            return true;

        }

        $_SESSION['login_not_exist_error'] = 'error';
        return false;

    }



    public function cadastrar_Usuario($nome, $email, $senhaHash, $data_cad, $whatsaap, $cod_discord, $face, $discord, $pix)
    {

        global $pdo;

        $ComandoSQL = "SELECT nome, email, senha, tel_contato_what, codigo_discord, facebook, discord, pix FROM usuario WHERE email = :e";
        $conn = $pdo->prepare($ComandoSQL);
        // $conn->bindValue(":n", $nome);
        $conn->bindValue(":e", $email);
        $conn->execute();

        if ($conn->rowCount() > 0) {
            $_SESSION['already_exist_email_error'] = 'error';
            return false;
        } else {

            echo $codigoCad = $this->cad_cod($nome);

            $ComandoSQL = "INSERT INTO usuario (nome, codigo, email, senha, data_cad, tel_contato_what, codigo_discord, facebook, discord, pix) VALUES (:n, :c, :e, :s, :d, :w, :cd, :f, :di, :p)";
            $conn = $pdo->prepare($ComandoSQL);
            $conn->bindValue(":n", $nome);
            $conn->bindValue(":c", $codigoCad);
            $conn->bindValue(":e", $email);
            $conn->bindValue(":s", $senhaHash);
            $conn->bindValue(":d", $data_cad);
            $conn->bindValue(":w", $tel_contato_what);
            $conn->bindValue(":cd", $codigo_discord);
            $conn->bindValue(":f", $facebok);
            $conn->bindValue(":di", $discord);
            $conn->bindValue(":p", $pix);
            $conn->execute();
            return true;
        }
    }

    public function logado_Usuario($id)
    {

        global $pdo;
        $dados_usuario = array();

        $ComandoSQL = "SELECT * FROM usuario WHERE ID_user = :id";
        $conn = $pdo->prepare($ComandoSQL);
        $conn->bindValue(":id", $id);
        $conn->execute();

        if ($conn->rowCount() > 0) {
            $dados_usuario = $conn->fetch(PDO::FETCH_ASSOC);
        }

        return $dados_usuario;

    }

    public function Obra_Usuario($id)
    {

        global $pdo;
        $Obra_Usuario = array();

        $ComandoSQL = "SELECT count(obra.ID_obra), obra.nome_obra, 
        obra.descricao, usuario.nome FROM obra INNER JOIN usuario ON obra.user_FK = :u";
        $conn = $pdo->prepare($ComandoSQL);
        $conn->bindValue(":u", $id);
        $conn->execute();

        if ($conn->rowCount() > 0) {
            $Obra_Usuario = $conn->fetch(PDO::FETCH_ASSOC);
        }

        return $Obra_Usuario;
    }

    public function Obra_Usuario_Count($id)
    {

        global $pdo;
        $Obra_Usuario_Count = array();

        $ComandoSQL = "SELECT count(ID_obra) FROM obra WHERE user_FK = :u";
        $conn = $pdo->prepare($ComandoSQL);
        $conn->bindValue(":u", $id);
        $conn->execute();

        if ($conn->rowCount() > 0) {
            $Obra_Usuario_Count = $conn->fetch(PDO::FETCH_ASSOC);
        }

        return $Obra_Usuario_Count;
    }

    public function Seguidor_user($id)
    {

        global $pdo;
        $Seguidor_user = array();

        $ComandoSQL = "SELECT count(user_FK) FROM seguir WHERE user_FK = :user";
        $conn = $pdo->prepare($ComandoSQL);
        $conn->bindValue(":user", $id);
        $conn->execute();

        if ($conn->rowCount() > 0) {
            $Seguidor_user = $conn->fetch(PDO::FETCH_ASSOC);
        }

        return $Seguidor_user;
    }

    public function Seguir_user($id)
    {

        global $pdo;
        $Seguir_user = array();

        $ComandoSQL = "SELECT * FROM seguir WHERE user_FK = :user and seguidor = :sgr";
        $conn = $pdo->prepare($ComandoSQL);
        $conn->bindValue(":user", $id);
        $conn->bindValue(":sgr", $_SESSION['ID_user']);
        $conn->execute();

        return $conn->rowCount();
    }



    function cad_cod($nome)
    {

        global $pdo;
        $code_temp = "@" . $nome;
        $codigo = strtolower(str_replace(" ", "", $code_temp));

        $ComandoSQL = "SELECT codigo FROM usuario WHERE codigo = :c";
        $conn = $pdo->prepare($ComandoSQL);
        $conn->bindValue(":c", $codigo);
        $conn->execute();

        if ($conn->rowCount() > 0) {

            $onlyNumbersOfCode = (int) $codigo;
            $newNumber = rand($onlyNumbersOfCode, 200);
            $newCode = $codigo . $newNumber;
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