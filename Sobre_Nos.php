<?php
include_once 'verificacao2.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-BOOK SQUARE | Sobre Nós</title>
    <link rel="stylesheet" href="header e footer/header.css">
    <link rel="stylesheet" href="header e footer/footer.css">
    <link rel="stylesheet" href="Sobre_Nos.css">
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
                        <label class="label_explorar" for="explorar" onclick="clique_explorar()"> Explorar <svg
                                id="dropdown_explorar_girar" class="icon_seta_para_baixo"
                                xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                                class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                <path
                                    d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                            </svg> </label>
                        <input class="checkbox_explorar" id="explorar" type="checkbox" name="" id="">
                        <div class="nada" id="dropdown_explorar">
                            <nav>
                                <div>
                                    <a href="#">
                <li class="opcoes_dropdown">Aventura</li></a>
                <a href="#">
                    <li class="opcoes_dropdown">Ação</li>
                </a>
                <a href="#">
                    <li class="opcoes_dropdown">Terror</li>
                </a>
                <a href="#">
                    <li class="opcoes_dropdown">Fantasias</li>
                </a>
        </div>
        <div>
            <a href="#">
                <li class="opcoes_dropdown">Humor</li>
            </a>
            <a href="#">
                <li class="opcoes_dropdown">Ficção</li>
            </a>
            <a href="#">
                <li class="opcoes_dropdown">Romance</li>
            </a>
            <a href="#">
                <li class="opcoes_dropdown">Conto</li>
            </a>
        </div>
        </nav>

        </div>

        </div>
        </li>

        <li style=" margin-left:-20px ;">
            <input class="pesquisa" type="search" placeholder="Pesquise livros e artista aqui">
        </li>
        <li class="block-right">
            <a href="App/Fazer_Obra/Fazer_obra.php">
                <div class="type-new-history">
                    Escrever
                </div>
            </a>
            <?php
            if (isset($_SESSION['ID_user'])):
                ?>
                <div class="icone-user">
                    <label onclick="clique_perfil()" for="dropdown_perfil" id="nome" name="nome">
                        <?= $dados_usuario['nome']; ?>
                        <svg id="dropdown_perfil_girar" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                            fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                            <path
                                d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                        </svg>
                    </label></p>
                    <div class="avatar-header">
                        <a href="App/Perfil\Perfil.php">
                            <img src="
                            
                                        <?php if (isset($dados_usuario['foto']) && !empty($dados_usuario['foto'])) { ?>
                                App/assets/IMAGEM_USUARIO/<?= $dados_usuario['foto']; ?>
                                        <?php } else { ?>
                                App/assets/IMAGENS/blank.png
                                        <?php } ?> 
                            
                            " alt="Foto de perfil" name="perfil" id="perfil-header">
                        </a>
                    </div>
                    <input id="dropdown_perfil_input" class="checkbox_perfil" type="checkbox">
                    <div class="nada" id="dropdown_perfil">
                        <nav>
                            <div>
                                <a href="App/perfil/perfil.php">
            <li class="opcoes_dropdown" style="font-weight: 600;">Meu perfil</li></a>
            <a href="#">
                <li class="opcoes_dropdown">Chat</li>
            </a>
            <a href="#">
                <li class="opcoes_dropdown">Enviar menssagem</li>
            </a>
            <a href="#">
                <li class="opcoes_dropdown">Denunciar perfil</li>
            </a>
            <a href="App/perfil/editar_perfil.php">
                <li class="opcoes_dropdown">Editar perfil</li>
            </a>
            <a href="App/perfil/perfil.php?deslogar">
                <li class="opcoes_dropdown" style="color:red;">Sair</li>
            </a>
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
        <p class="texto_inicio">E-book Square > Sobre nos</p>
        <div class="container_Sobre_nos">
            <p>O E-book Square é uma plataforma de autopublicação de livros, seja na forma de Fanfics ou Histórias
                Originais.</p>
            <br>
            <p>Atualizando-se constantemente com novas funcionalidades e adaptando-se a novas programações e padrões
                tecnológicos visando melhorar a estrutura do site e aperfeiçoá-lo, o E-book Square se empenha em
                garantir aos seus fãs
                uma boa navegação e um ambiente ideal para se comunicar. Divirta-se com as ferramentas disponíveis.</p>
            <br>
            <p>Para manter a ordem neste espaço de produção e conhecimento, os administradores asseguram sempre a
                aplicação
                das condições e regras de envio de conteúdos agregados, com vista a que o ambiente esteja de acordo com
                as
                regras estabelecidas e que se mantenha o bom funcionamento da plataforma.</p>
            <br>
            <p class="titulo">BENEFÍCIOS DA AUTOPUBLICAÇÂO</p>
            <br>
            <p>Com a autopublicação, você pode publicar rapidamente sua história sem a necessidade de uma editora em um
                processo simples e rápido.*</p>
            <br>
            <p>no E-book Square, você não precisa ter uma história finalizada antes de publicá-la, porque pode colocar
                capítulos um de cada vez, para obter feedback de cada um e saber o que está acontecendo. Quando você
                conhece
                seu público-alvo e assim melhora sua história.</p>
            <br>
            <p>Graças a essas vantagens, muitas pessoas puderam iniciar suas carreiras profissionais de redação.</p>
            <br>
            <p>Exemplos de grandes escritores que começaram como fanfics amadores: Kimberly Mascarenhas (autora de Soul
                Rebel, Ed. Leya); Cassandra Clare (Autora de Instrumentos Mortais, Ed. Galera Record); Erika Leonard
                James
                (autora de Fifty Shades of Grey, Ed. Intrinsic), Anna Todd (autora de After, Ed. Parallel), entre
                outros.
            </p>
            <br>
            <p>* Para maior segurança, aconselha-se que o autor registre sua obra junto aos órgãos competentes de seu
                país.
            </p>
            <br>
            <p class="titulo">O QUE É FANFIC?</p>
            <br>
            <p>Fanfics, ou seu termo em inglês fanfictions, são histórias criadas por fãs baseadas em animes, bandas,
                celebridades, séries, mangás, jogos, músicos, livros, filmes, quadrinhos e outros temas diversos. Os
                personagens e ambientes das obras servem de inspiração para a criação de tramas de ficção, mas são
                desenvolvidos de acordo com as ideias do autor, podem criar relações e realidades paralelas
                completamente
                diferentes das histórias originais.</p>
            <br>
            <p>A fan fiction é um fenômeno sociocultural disseminado por meio de redes sociais e sites e que estimula o
                desenvolvimento e o amadurecimento da expressão escrita e da leitura por meio da produção de conteúdos
                narrativos baseados em temas da cultura pop. Sua relevância é confirmada pelo aumento de publicações de
                trabalhos acadêmicos que tratam da importância da fanfiction para a cultura e criação literária.</p>
            <br>
            <p class="titulo">IMPACTO SOCIAL</p>
            <br>
            <p>Estamos orgulhosos de que muitos de nossos leitores começaram a gostar de ler e escrever depois de
                descobrirem oE-book Squareporque nunca haviam lido um livro antes em suas vidas. São milhares de jovens
                que
                não tiveram acesso à literatura e/ou não se interessaram pelos conteúdos publicados pelas editoras
                tradicionais.</p>
        </div>
    </main>


    <footer>
        <div class="footer_primera_parte">
            <img src="app/perfil/estilo/imagens/logo_footer.png" alt="logo do site">
            <p class="formatacao">© 2022 E-book Square. </p>
        </div>
        <div class="footer_segunda_parte">
            <ul>
                <a href="App/FAQ/FAQ.php">
                    <li class="formatacao link_footer">Ajuda/FAQ</li>
                </a>
                <a href="Sobre_Nos.php">
                    <li class="formatacao link_footer">Sobres nós</li>
                </a>
                <a href="contato.php">
                    <li class="formatacao link_footer">Suporte</li>
                </a>
            </ul>
        </div>
        <div class="footer_terceira_parte">
            <ul>
                <a href="App/Pagina inicial/pagina_inicial.php">
                    <li class="formatacao link_footer">Ler histórias</li>
                    <a href="#">
                        <li class="formatacao link_footer">Diretrizes da comunidade</li>
                    </a>
            </ul>
        </div>
        <div class="footer_quarta_parte">
            <ul>
                <li class="formatacao">É uma plataforma para autopublicação de Livros. Solte sua imaginação, escreva
                    suas histórias, tenha sua própria página personalizada, compartilhe idéias, faça amizades</li>
        </div>
    </footer>
</body>

</html>