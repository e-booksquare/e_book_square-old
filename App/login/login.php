<?php
    session_start();
    include_once "class-log.php";

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | E-Book Square</title>
    <link rel="shortcut icon" href="../assets/IMAGENS/logo-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/CSS/login.css">
    <link rel="stylesheet" href="../assets/CSS/responsividade_cadastrar_e_login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
</head>
<body>
    <main>
        <form action="logar.php" method="post">
        <div class="container">
            <h1 class="titulo">Logar</h1>
            <div class="conteudo">
                <div>
                    <div class="entrada entrada_email">
                        <input type="email'" name="email" placeholder="Digite seu email" autofocus>
                    </div>
                    <div class="entrada entrada_senha">
                        <input type="password" name="senha" placeholder="Digite sua senha" id="senha">
                        <img id="olho" src="../assets/IMAGENS/eye-off-outline.svg">
                    </div>

                    <div class="botao_login">
                        <button type="submit">Logar</button>
                        <div class="Continua_Cone">
                            <input type="checkbox" name="" id="">Manter conectado
                        </div>
                    </div>
                </div>
                <div>
                    <div class="conectar_google">
                        <a href=""><button type="button" class="botao_google"><img src="../assets/IMAGENS/google.gif" alt="">Logar com o google</button></a>
                    </div>
                    <div class="conectar_face">
                        <a href=""><button type="button" class="botao_face"><img class="logo_face" src="../assets/IMAGENS/face.png" alt="">Logar com o facebook</button></a>
                    </div>
                    <p style="text-align:center; font-size: 13px;">Você já é cadastrado?  <a href="cadastro.php">Clique aqui</a> </p>
                </div>
            </div>
        </div>
    </form>
    
    <div class="ao_Lado">
        <img class="imagem_lado" src="../assets/IMAGENS/livros.jpg" alt="">
        <div class="marca_texto">
            <div class="barra"></div>
            <div class="triangulos">
                <div class="triangulo-para-direita"></div>
                <div class="triangulo-para-esquerda"></div>
            </div>
        </div>
    </div>
    </main>



     <div class="mobile">
        <form action="" method="get">
        <h1 class="titulo">Logar</h1>
        <div>
            <div class="entrada entrada_email">
                <input type="text" name="emailmob" placeholder="Digite seu email" required>
            </div>
            <div class="entrada entrada_senha">
                <input type="password" name="senha" placeholder="Digite sua senha" id="senha_mob" required>
                <img id="olho_mob" src="../assets/IMAGENS/eye-off-outline.svg">
            </div>

            <div class="botao_login">
                <button type="submit">Logar</button>
                <div class="Continua_Cone">
                    <input type="checkbox" name="" id="">Manter conectado
                </div>
            </div>
        </div>
        <div>
            <div class="conectar_google">
                <a href=""><button type="button" class="botao_google"><img src="../assets/IMAGENS/google.gif" alt="">Logar com o google</button></a>
            </div>
            <div class="conectar_face">
                <a href=""><button type="button" class="botao_face"><img class="logo_face" src="../assets/IMAGENS/face.png" alt="">Logar com o facebook</button></a>
            </div>
            <p style="text-align:center; font-size: 13px;">Você já é cadastrado?  <a href="cadastro.html">Clique aqui</a> </p>
        </div>
    </div>
</form>



    <script>
        $(':input').on('focus', function() {
            this.dataset.placeholder = this.placeholder;
            this.placeholder = '';
        }).on('blur', function(){
            this.placeholder = this.dataset.placeholder;
        });


        var senha = $('#senha');
        var olho= $("#olho");
        var senha_mob = $('#senha_mob');
        var olho_mob= $("#olho_mob");

        olho.mouseenter(function() {
        senha.attr("type", "text");
        olho.attr("src", "../assets/IMAGENS/eye-outline.svg");
        });
        $( "#olho" ).mouseout(function() { 
        $("#senha").attr("type", "password");
        olho.attr("src", "../assets/IMAGENS/eye-off-outline.svg");
        });

        olho_mob.mouseenter(function() {
        senha_mob.attr("type", "text");
        olho_mob.attr("src", "../assets/IMAGENS/eye-outline.svg");
        });
        $( "#olho_mob" ).mouseout(function() { 
        $("#senha_mob").attr("type", "password");
        olho_mob.attr("src", "../assets/IMAGENS/eye-off-outline.svg");
        });
    </script>

    <!-- Start password error -->

    <?php if(!empty($_SESSION['login_passw_error'])){ ?>

<div class="login_error">
    <p>
        Senha incorreta
    </p>
</div>

<?php session_unset();} ?>

<!-- End password error --> 

<!-- Start exist not email error -->
<?php if(!empty($_SESSION['login_not_exist_error'])){ ?>

<div class="login_error">
    <p>
        Email não cadastrado
    </p>
</div>

 <?php session_unset();} ?> 
<!-- End exist not email error -->
</body>
</html>