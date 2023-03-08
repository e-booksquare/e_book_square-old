<?php
    include_once 'verificacao2.php'; 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" href="../app\assets\IMAGENS\logo-removebg-preview.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="app/assets/CSS/index.css">
    <link rel="stylesheet" href="header e footer/header.css">
    <link rel="stylesheet" href="header e footer/footer.css">

    <title>E-Book Square</title>
</head>
<body>
<header>
    <div class="container-header">
            <div class="img-logo-header">
                <img src="app/assets/IMAGENS/logo.jpg" alt="" class="logo-header">
            </div>
            <ul>
                <li style="display: flex; align-items: center; gap: 30px; margin-left:20px ;">
                    <div class="explorar">
                       <label class="label_explorar" for="explorar" onclick="clique_explorar()" > Explorar <svg id="dropdown_explorar_girar" class="icon_seta_para_baixo" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                    </svg> </label>
                       <input class="checkbox_explorar" id="explorar" type="checkbox" name="" id="">
                        <div class="nada" id="dropdown_explorar">
                            <nav>
                                <div>
                                    <a href="#"><li class="opcoes_dropdown">Aventura</li></a>
                                    <a href="#"><li class="opcoes_dropdown">Ação</li></a>
                                    <a href="#"><li class="opcoes_dropdown">Terror</li></a>
                                    <a href="#"><li class="opcoes_dropdown">Fantasias</li></a>
                                </div>
                                <div>
                                    <a  href="#"><li class="opcoes_dropdown">Humor</li></a>
                                    <a href="#"><li class="opcoes_dropdown">Ficção</li></a>
                                    <a href="#"><li class="opcoes_dropdown">Romance</li></a>
                                    <a href="#"><li class="opcoes_dropdown">Conto</li></a>
                                </div>
                            </nav>
                        
                        </div>

                    </div>
                </li>
                
                <li  style=" margin-left:-20px ;">
                    <input class="pesquisa" type="search" placeholder="Pesquise livros e artista aqui">
                </li>
                <li class="block-right">
                    <a href="app/Fazer_Obra/Fazer_obra.php">
                        <div class="type-new-history">
                            Escrever
                        </div>
                    </a>
                    <?php
                        if(isset($_SESSION['ID_user'])):
                    ?>
                <div class="icone-user">
                    <label onclick="clique_perfil()" for="dropdown_perfil" id="nome" name="nome"><?=$dados_usuario['nome'];?> </label>
                    <svg id="dropdown_perfil_girar" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                    </svg></p>
                    <div class="avatar-header">
                    <a href="app\Perfil\Perfil.php">
                        <img src="
                        
                        <?php if(isset($dados_usuario['foto']) && !empty($dados_usuario['foto'])){ ?>
                            app/assets/IMAGEM_USUARIO/<?= $dados_usuario['foto']?>
                        <?php } else{?>
                            app/assets/IMAGENS/blank.png
                        <?php }?> 
                        
                        " alt="Foto de perfil" name="perfil" id="perfil-header">
                    </a>
                    </div>
                    <input id="dropdown_perfil_input" class="checkbox_perfil" type="checkbox">
                    <div class="nada" id="dropdown_perfil">
                        <nav>
                            <div>
                            <a href="app/Perfil/perfil.php"><li class="opcoes_dropdown" style="font-weight: 600;">Meu perfil</li></a>
                                <a href="#"><li class="opcoes_dropdown">Chat</li></a>
                                <a href="#"><li class="opcoes_dropdown">Enviar menssagem</li></a>
                                <a href="#"><li class="opcoes_dropdown">Denunciar perfil</li></a>
                                <a href="app/perfil/editar_perfil.php"><li class="opcoes_dropdown">Editar perfil</li></a>
                                <a href="index.php?deslogar"><li class="opcoes_dropdown" style="color:red;">Sair</li></a>
                            </div>
                        </nav>
                     </div>
                     <?php
                        else:
                     ?>
                        <p>
                        <a href="app/login/login.php">
                            Fazer Login
                        </a>
                        </p>
                     <?php
                        endif;
                     ?>
                </li>
                
            </ul>
        </div>
        <script src="header e footer/JAVASCRIPT/header.js"></script>
    </header>
        
    <section class="hero">
        <div class="container">
            <div class="content-box">
                <h1>Olá, somos a E-book <br> Square.</h1>
                <h2>Uma nova plataforma de histórias indies</h2>
                <p>
                    A E-book Square tem o objetivo de criar e motivar escritores para que possam explorar suas habilidades e criarem novos mundos de pura imaginação e realismo.
                </p>

                <div class="buttons-iniciar" >
                    <a href="app\Pagina inicial\Pagina_inicial.php">
                        <button id="iniciar-leitura" class="iniciar">
                            Iniciar leitura
                        </button>
                    </a>
                    <a href="app\Fazer_Obra\fazer_obra.php" id="iniciar-secundário" >
                        <button id="iniciar-escrita" class="iniciar">
                            Começar a escrever
                        </button>
                    </a>
                </div>
            </div>
            <div class="img-hero-box">
                <img src="app/assets/IMAGENS/img-index.jpg" alt="" id="img-hero">
            </div>
        </div>
    </section>
    
    <footer>
           <div class="footer_primera_parte">
           <img src="app/perfil/estilo/imagens/logo_footer.png" alt="logo do site">
           <p class="formatacao">© 2022 E-book Square. </p>
       </div>
       <div class="footer_segunda_parte">
           <ul>
               <a href="#"><li class="formatacao link_footer">Ajuda/FAQ</li></a>
               <a href="#"><li class="formatacao link_footer">Sobres nós</li></a>
               <a href="#"><li class="formatacao link_footer">Segurança</li></a>
               <a href="#"><li class="formatacao link_footer">Suporte</li></a>
           </ul>
       </div>
       <div class="footer_terceira_parte">
           <ul>
               <a href="#"><li class="formatacao link_footer">Ler histórias</li>
               <a href="#"><li class="formatacao link_footer">Diretrizes da comunidade</li></a>
           </ul>
       </div>
       <div class="footer_quarta_parte">
           <ul>
               <li class="formatacao">É uma plataforma para autopublicação de Livros. Solte sua imaginação, escreva suas histórias, tenha sua própria página personalizada, compartilhe idéias, faça amizades</li>
       </div>
    </footer>
</body>
</html>