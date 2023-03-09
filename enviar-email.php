<?php
require __DIR__ . '/vendor/autoload.php';

use \App\Comunicacao\Email;

if (
    $_SERVER['REQUEST_METHOD'] == 'POST'
    && isset($_POST['nome']) && !empty($_POST['nome'])
    && isset($_POST['email']) && !empty($_POST['email'])
    && isset($_POST['titulo']) && !empty($_POST['titulo'])
    && isset($_POST['conteudo']) && !empty($_POST['conteudo'])
) {

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $conteudo = filter_input(INPUT_POST, 'conteudo', FILTER_SANITIZE_FULL_SPECIAL_CHARS);


    // $email = 'ratsel00h@gmail.com';
// $subject = "Vaga de developer";
// $body = "<b>Hello my master developed</b> <br><br> hi";

    $obEmail = new Email;
    $sucesso = $obEmail->sendEmail($email, $titulo, $conteudo, $nome);

    header("location: contato.php?email-enviado");
    exit;

} else {
    header("location: contato.php?falha");
    exit;
}

// echo $sucesso ? "Mensage has been send" : $obEmail->getError();
// exit;