<?php
    include_once 'verificacao2.php'; 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/css/escrever.css">
    <link rel="shortcut icon" href="../assets/IMAGENS/logo-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="estilo/css/pagina_de_escrever.css">
    <link rel="stylesheet" href="../../header e footer/header.css">
    <link rel="stylesheet" href="../../header e footer/footer.css">
    <script src="ckeditor/ckeditor.js"></script>
    <script src="informacoes_obra.js"></script>
    <title>Escrever | E-Book Square</title>
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
</head>
<body>
        <header>
            <div class="container-header">
                    <div class="img-logo-header">
                        <a href="..\Pagina Inicial\pagina_inicial.php"><img src="../../app/assets/IMAGENS/logo.jpg" alt="" class="logo-header"></a>
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
                            <a href="../Fazer_Obra/Fazer_obra.php">
                                <div class="type-new-history">
                                    Escrever
                                </div>
                            </a>
                            <?php
                                if(isset($_SESSION['ID_user'])):
                            ?>
                        <div class="icone-user">
                        <label onclick="clique_perfil()" for="dropdown_perfil" id="nome" name="nome"><?=$dados_usuario['nome'];?> 
                    <svg id="dropdown_perfil_girar" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                    </svg></label></p>
                            <div class="avatar-header">
                            <a href="../Perfil\Perfil.php">
                                <img src="
                                
                                <?php if(isset($dados_usuario['foto']) && !empty($dados_usuario['foto'])){ ?>
                                    ../assets/IMAGEM_USUARIO/<?= $dados_usuario['foto'];?>
                                <?php } else{?>
                                    ../assets/IMAGENS/blank.png
                                <?php }?> 
                                
                                " alt="Foto de perfil" name="perfil" id="perfil-header">
                            </a>
                            </div>
                            <input id="dropdown_perfil_input" class="checkbox_perfil" type="checkbox">
                            <div class="nada" id="dropdown_perfil">
                                <nav>
                                    <div>
                                        <a href="../perfil/perfil.php"><li class="opcoes_dropdown" style="font-weight: 600;">Meu perfil</li></a>
                                        <a href="#"><li class="opcoes_dropdown">Chat</li></a>
                                        <a href="#"><li class="opcoes_dropdown">Enviar menssagem</li></a>
                                        <a href="#"><li class="opcoes_dropdown">Denunciar perfil</li></a>
                                        <a href="../perfil/editar_perfil.php"><li class="opcoes_dropdown">Editar perfil</li></a>
                                        <a href="perfil.php?deslogar"><li class="opcoes_dropdown" style="color:red;">Sair</li></a>
                                    </div>
                                </nav>
                            </div>
                            <?php
                                else:
                            ?>
                                <p>
                                <a href="../login/login.php">
                                    Fazer Login
                                </a>
                                </p>
                            <?php
                                endif;
                            ?>
                        </li>
                        
                    </ul>
                </div>
                <script src="../../header e footer/JAVASCRIPT/header.js"></script>
        </header>
        <div class="container_header_folha">
                <div class="header_folha">
                    <div class="container_sobre_historia">
                        <div class="ajustar_alinhamento">
                            <div class="img">
                                <img src="https://www.olivetreefilmes.com.br/wp-content/uploads/2021/08/como-enviar-fotos-pelo-whatsapp-sem-perder-qualidade.jpg" alt="" srcset="">
                            </div>
                            <div class="informacoes_obra">
                                <h1 id="as">Titulo</h1>
                                <p><h3>Sinopse da hístoria:</h3> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus eum magni dolore repellat, aspernatur sit ex sint minima totam tenetur voluptas officia quasi facilis commodi obcaecati adipisci dignissimos nihil maxime?</p>
                                <p><span class="alterar_estilo_texto">Categoria:</span>Terror</p>
                                <p><span class="alterar_estilo_texto">Idade:</span>18</p>
                                <p><span class="alterar_estilo_texto">Tags:</span></p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    
    <br><br><br><br>
    <div class="folha">
        <div class="Titulo_entrada">
        <input class="titulo_historias" name="titulo_historias" id="titulo_historias" value="titulo">
        </div>
       
        <textarea row="10" colun="30" id="historia" onkeydown="autoResize()" placeholder="Sua historia começa aqui..." name="historia"></textarea>   
    </div>
    <div class="botoes">
        <a href="preview.php" id="publicar" name="publicar"><button>Preview</button></a>
        <a href="..\Perfil\Perfil.php"><button>Cancelar</button></a>
        <a href="Fazer_obra.php"><button>Voltar</button></a>
    </div>


    <footer>
    <div class="footer_primera_parte">
           <img src="../perfil/estilo/imagens/logo_footer.png" alt="logo do site">
           <p class="formatacao">© 2022 E-book Square. </p>
       </div>
       <div class="footer_segunda_parte">
           <ul>
               <a href="#"><li class="formatacao link_footer">Ajuda/FAQ</li></a>
               <a href="#"><li class="formatacao link_footer">Sobres nós</li></a>
               <a href="../../contato.php"><li class="formatacao link_footer">Suporte</li></a>
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

    
    <script src="editor.js"></script>
    <script>
   function autoResize()
    {
        objTextArea = document.getElementById('historia');
        while (objTextArea.scrollHeight > objTextArea.offsetHeight)
        {
            objTextArea.rows += 1;
        }
        if (objTextArea.scrollHeight < objTextArea.offsetHeight)
        {
            objTextArea.rows += -1;
        }
        
        
    }
    /*$('textarea[name="historia"]').on('keyup change onpaste', function () {
    var alturaScroll = this.scrollHeight;
    var alturaCaixa = $(this).height();
        if (alturaScroll > (alturaCaixa + 10)) {
        if (alturaScroll > 99999999999999999) return;
        $(this).css('height', alturaScroll);
    }

    if( $(this).val() == '' ){
        // retonando ao height padrão de 40px
        $(this).css('height', '40px');
    }

});*/

    </script>
</body>
</html>