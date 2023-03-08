<?php
    include_once 'verificacao2.php'; 
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="header e footer/header.css">
        <link rel="stylesheet" href="header e footer/footer.css">
        <link rel="stylesheet" href="contato.css">

        <title>Contato | EBS</title>
    </head>
    <body>

    <header>
        <div class="container-header">
                <div class="img-logo-header">
                    <a href="pagina_inicial.php"><img src="app/assets/IMAGENS/logo.jpg" alt="" class="logo-header"></a>
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
                        <a href="App/Fazer_Obra/Fazer_obra.php">
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
                        <a href="App/Perfil\Perfil.php">
                            <img src="
                            
                            <?php if(isset($dados_usuario['foto']) && !empty($dados_usuario['foto'])){ ?>
                                App/assets/IMAGEM_USUARIO/<?= $dados_usuario['foto'];?>
                            <?php } else{?>
                                App/assets/IMAGENS/blank.png
                            <?php }?> 
                            
                            " alt="Foto de perfil" name="perfil" id="perfil-header">
                        </a>
                        </div>
                        <input id="dropdown_perfil_input" class="checkbox_perfil" type="checkbox">
                        <div class="nada" id="dropdown_perfil">
                            <nav>
                                <div>
                                    <a href="App/perfil/perfil.php"><li class="opcoes_dropdown" style="font-weight: 600;">Meu perfil</li></a>
                                    <a href="#"><li class="opcoes_dropdown">Chat</li></a>
                                    <a href="#"><li class="opcoes_dropdown">Enviar menssagem</li></a>
                                    <a href="#"><li class="opcoes_dropdown">Denunciar perfil</li></a>
                                    <a href="App/perfil/editar_perfil.php"><li class="opcoes_dropdown">Editar perfil</li></a>
                                    <a href="perfil.php?deslogar"><li class="opcoes_dropdown" style="color:red;">Sair</li></a>
                                </div>
                            </nav>
                        </div>
                        <?php
                            else:
                        ?>
                            <p>
                            <a href="App/login/login.php">
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

    <main>
        <section class="informacoes">
            <h1 class="titulo">CONTATE-NOS</h1>
            <p class="text">Por favor, sintase livre para dizer qualquer<br>coisa para nós.</p>
            <p class="text">Nossa equipe responderá qualquer mensagem<br>o mais rapido possivel.</p>
            <p class="text">Algumas questões podem ser solucionadas acessando nosso<br><a href="FAQ.php" class="link_Perguntas text">Perguntas e Respostas Frequentes (FAQ).</a></p>
        </section>

        <section class="forms">
            <form action="enviar-email.php" method="post">
                <div class="separacao_forms">
                    <input class="entradas separar_entradas" type="text" name="nome" placeholder="Nome de usuário" require> <br>
                    <input class="entradas" type="email" name="email" placeholder="E-mail"> <br>
                </div>

                <select class="entradas selecionar" name="" id="assuntos" onChange="select_assunto()">
                    <option value="1" selected disabled>Assunto</option>
                    <option value="2">Feedback</option>
                    <option value="3">Reportar problemas</option>
                    <option value="4">Denúncia</option>
                    <option value="5">Ajuda</option>
                    <option value="6">Termos e privacidade</option>
                </select> <br>

                <input type="hidden" name="titulo" value="" id="set_value">
                <textarea class="entradas texto_grande" name="conteudo" cols="30" rows="10" placeholder="Descreva sua dúvida..." require></textarea> <br>
                <input class="enviar" type="submit" value="Enviar" id="btn_submit">
            </form>
        </section>    

    </main>


    <footer>
        <div class="footer_primera_parte">
            <img src="App/perfil/estilo/imagens/logo_footer.png" alt="logo do site">
            <p class="formatacao">© 2022 E-book Square. </p>
        </div>
        <div class="footer_segunda_parte">
        <ul>
            <a href="#"><li class="formatacao link_footer">Ajuda/FAQ</li></a>
            <a href="#"><li class="formatacao link_footer">Sobres nós</li></a>
            <a href="contato.php"><li class="formatacao link_footer">Suporte</li></a>
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

    <script type="text/javascript">

        let btn = document.querySelector("#btn_submit");
        // let hidden = document.querySelector("#set_value").value;

        function select_assunto(){
            let value_select = '';
            let select = document.querySelector("#assuntos");
            let optionValue = select.options[select.selectedIndex];

            let text = optionValue.text;
            value_select = optionValue.value;
            let hidden = document.querySelector("#set_value");
            hidden.value = text;

            // console.log(text, hidden.value)
        }

        
        select_assunto();


        // if(hidden == 'Assunto'){
        //     btn.setAttribute("disabled", "disabled");
        // }
        // else{
        //     btn.removeAttribute("disabled", "disabled");
        // }
    </script>
</html>