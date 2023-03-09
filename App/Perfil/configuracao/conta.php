<?php
    include_once 'verificacao2.php';
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../header e footer\header.css">
    <link rel="stylesheet" href="../../../header e footer\footer.css">
    <link rel="stylesheet" href="../ESTILO/CSS/configuracao.css">
    <link rel="stylesheet" href="notificacao.css">
    <link rel="shortcut icon" href="../assets/IMAGENS/logo-removebg-preview.png" type="image/x-icon">
    <title>Configuração | E-BOOK SQUARE</title>
</head>
<body>
<header>
        <div class="container-header">
        <div class="img-logo-header">
                    <a href="../..\Pagina Inicial\pagina_inicial.php"><img src="../../../app/assets/IMAGENS/logo.jpg" alt="" class="logo-header"></a>
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
                        <a href="../../Fazer_Obra/Fazer_obra.php">
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
                        <a href="../Perfil.php">
                            <img src="
                            
                            <?php if(isset($dados_usuario['foto']) && !empty($dados_usuario['foto'])){ ?>
                                ../../assets/IMAGEM_USUARIO/<?= $dados_usuario['foto'];?>
                            <?php } else{?>
                                ../../assets/IMAGENS/blank.png
                            <?php }?> 
    
                            " alt="Foto de perfil" name="perfil" id="perfil-header">
                        </a>
                        </div>
                        <input id="dropdown_perfil_input" class="checkbox_perfil" type="checkbox">
                        <div class="nada" id="dropdown_perfil">
                            <nav>
                                <div>
                                    <a  href="#"><li class="opcoes_dropdown">Chat</li></a>
                                    <a href="#"><li class="opcoes_dropdown">Enviar menssagem</li></a>
                                    <a href="#"><li class="opcoes_dropdown">Denunciar perfil</li></a>
                                    <a href="../editar_perfil.php"><li class="opcoes_dropdown">Editar perfil</li></a>
                                    <a href="../perfil.php?deslogar"><li class="opcoes_dropdown">Sair</li></a>
                                </div>
                            </nav>
                         </div>
                         <?php
                            else:
                         ?>
                            <p>
                            <a href="../../login/login.php">
                                Fazer Login
                            </a>
                            </p>
                         <?php
                            endif;
                         ?>
                    </li>
                    
                </ul>
            </div>
            <script src="../../../header e footer/JAVASCRIPT/header.js"></script>
        </header>

        <main>

            <nav class="navegacao">
                <ul>
                    <a href="conta.php"><li class="opcao selecionado">Conta</li></a>
                    <a href="notificacao.php"><li class="opcao ">Notificações</li></a>
                    <a href="bloqueios.php"><li class="opcao">Lista de bloqueados</li></a>
                </ul>
            </nav>

            <section class="config">
                <div class="container_icon">
                    <a href="notificacao.php"><img class="icone_not" src="../ESTILO/Imagens/Imgem_notificacao.svg"></a>
                </div>
                <div class="informacoes">
                    <p><span class="texto_topicos">Nome de usuário: </span><input type="text" name="nome_usuario" id="nome_usuario"> <a href="#" class="mudar">Mudar</a> </p>
                    <p><span class="texto_topicos">Chave pix: </span><input type="text" name="chave_pix" id="chave_pix"> <a href="#" class="mudar">Mudar</a> </p>
                    <p><span class="texto_topicos">E-mail: </span><input type="email" name="email_usuario" id="email_usuario"> <a href="#" class="mudar">Mudar</a> </p>
                    <p><span class="texto_topicos">Senha: </span><input type="password" name="senha_usuario" id="senha_usuario"> <a href="#" class="mudar">Mudar</a> </p>
                    <p><span class="texto_topicos">Idioma: <span></span>
                        <select class="idioma" name="idioma" id="idioma">
                            <option value="Portugues">Português</option>
                        </select>
                    </p>
                </div>
                <div class="botao_salvar_div">
                    <button class="botao_salvar" type="submit">SALVAR</button>
                </div>
            </section>
            <a href="#" class="excluir">Excluir conta</a>
        </main>



        <footer>
            <div class="footer_primera_parte">
                   <img src="../estilo/imagens/logo_footer.png" alt="logo do site">
                   <p class="formatacao">© 2022 E-book Square. </p>
               </div>
               <div class="footer_segunda_parte">
                <ul>
                    <a href="../../FAQ/FAQ.php"><li class="formatacao link_footer">Ajuda/FAQ</li></a>
                    <a href="../../../Sobre_Nos.php"><li class="formatacao link_footer">Sobres nós</li></a>
                    <a href="../../../contato.php"><li class="formatacao link_footer">Suporte</li></a>
                </ul>
                </div>
                <div class="footer_terceira_parte">
                    <ul>
                        <a href="../../Pagina inicial/pagina_inicial.php"><li class="formatacao link_footer">Ler histórias</li>
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