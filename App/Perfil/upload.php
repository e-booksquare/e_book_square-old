<?php

//save crop image in php

if(isset($_POST["image"]))
{
 include('../_CONEXAO/conexao.php');

 $id_usuario = 42; 
 
 $data = $_POST["image"];

 $image_array_1 = explode(";", $data);

 $image_array_2 = explode(",", $image_array_1[1]);

 $data = base64_decode($image_array_2[1]);

 $imageName = time() . '.png';

 file_put_contents($imageName, $data);

 $image_file = addslashes(file_get_contents($imageName));

 $query = "UPDATE usuario SET foto = :imagem WHERE ID_user = :id_usuario";

 $statement = $pdo->prepare($query);

 print_r($statement);

 if($statement->execute([':imagem' => $imageName, ":id_usuario" => $id_usuario]))
 {  
    $pasta = "../assets/IMAGEM_USUARIO/";
    unlink($pasta.$imageName);
 }

}

//     $token = md5(uniqid(rand(), true));

//     $pasta = "../../assets/IMAGEM_USUARIO/";
//     $temporario = $_FILES['banner']['tmp_name'];
//     $banner = $token.$nome_original;
//     if(move_uploaded_file($temporario, $pasta.$banner))
//     {
//         $bannerDeleteFromBD = $dados_usuario['banner'];

//         unlink($pasta.$bannerDeleteFromBD);

//         $message = "Upload feito com sucesso";
       
//     }



// a de baixo fumciona no outro file

// IMG PERFIL
 
// $formatosPermitidos = array("png", "jpeg", "jpg", "gif");

// $extensionFile =  strtolower(pathinfo($_FILES['foto_perfil']['name'], PATHINFO_EXTENSION));

// if(in_array($extensionFile, $formatosPermitidos))
// {

//     $nome_original = str_replace(" ", "_", basename($_FILES["foto_perfil"]["name"]));
//     $token = md5(uniqid(rand(), true));

//     $pasta = "../../assets/IMAGEM_USUARIO/";
//     $temporario = $_FILES['foto_perfil']['tmp_name'];
//     $foto = $token.$nome_original;
//     if(move_uploaded_file($temporario, $pasta.$foto))
//     {
//         $fotoDeleteFromBD = $dados_usuario['foto'];

//         unlink($pasta.$fotoDeleteFromBD);

//         $message = "Upload feito com sucesso";
       
//     }
//     else
//     {
//         echo  $message = "Não foi possível fazer upload";
//         die();
//     }
// }
// else
// {
//     if($extensionFile == null)
//     {
//         $foto = $dados_usuario['foto'];
//     }
//     else
//     {
//         echo $message = "Formato inválido: ".$extensionFile; 
//         die();
//     }       
// }

//                         // BANNER

// $extensionFileBanner =  strtolower(pathinfo($_FILES['banner']['name'], PATHINFO_EXTENSION));

// if(in_array($extensionFileBanner, $formatosPermitidos))
// {

//     $nome_original = str_replace(" ", "_", basename($_FILES["banner"]["name"]));
//     $token = md5(uniqid(rand(), true));

//     $pasta = "../../assets/IMAGEM_USUARIO/";
//     $temporario = $_FILES['banner']['tmp_name'];
//     $banner = $token.$nome_original;
//     if(move_uploaded_file($temporario, $pasta.$banner))
//     {
//         $bannerDeleteFromBD = $dados_usuario['banner'];

//         unlink($pasta.$bannerDeleteFromBD);

//         $message = "Upload feito com sucesso";
       
//     }
//     else
//     {
//         echo  $message = "Não foi possível fazer upload";
//         die();
//     }
// }
// else
// {
//     if($extensionFileBanner == null)
//     {
//         $banner = $dados_usuario['banner'];
//     }
//     else
//     {
//         echo $message = "Formato inválido: ".$extensionFileBanner; 
//         die();
//     }       
// }