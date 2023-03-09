<?php
include_once 'verificacao2.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="../../header e footer/header.css">
<link rel="stylesheet" href="../../header e footer/footer.css">
<link rel="stylesheet" href="ESTILO/CSS/preview.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
</head>

<body>
    <header>
        <div class="container-header">
            <div class="img-logo-header">
                <a href="..\Pagina Inicial\pagina_inicial.php"><img src="../../app/assets/IMAGENS/logo.jpg" alt=""
                        class="logo-header"></a>
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
            <a href="../Fazer_Obra/Fazer_obra.php">
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
                        <a href="../Perfil\Perfil.php">
                            <img src="
                        
                            <?php if (isset($dados_usuario['foto']) && !empty($dados_usuario['foto'])) { ?>
                            ../assets/IMAGEM_USUARIO/<?= $dados_usuario['foto']; ?>
                            <?php } else { ?>
                            ../assets/IMAGENS/blank.png
                            <?php } ?> 
                        
                        " alt="Foto de perfil" name="perfil" id="perfil-header">
                        </a>
                    </div>
                    <input id="dropdown_perfil_input" class="checkbox_perfil" type="checkbox">
                    <div class="nada" id="dropdown_perfil">
                        <nav>
                            <div>
                                <a href="../perfil/perfil.php">
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
            <a href="../perfil/editar_perfil.php">
                <li class="opcoes_dropdown">Editar perfil</li>
            </a>
            <a href="perfil.php?deslogar">
                <li class="opcoes_dropdown" style="color:red;">Sair</li>
            </a>
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

    <section class="informacoes_historia">
        <div class="informacoes">
            <p class="tipo_informacoes">Titulo: <span name="titulo_historia_escrever_preview"
                    id="titulo_historia_escrever_preview">Titulo</span></p>
            <p class="tipo_informacoes">Categoria: <span name="categoria_historia_escrever_preview"
                    id="categoria_historia_escrever_preview">aqui</span></p>
            <select name="" id="" disabled="disabled" class="escolher_caputulo">
                <option value="capitulo1">capitulo 1</option>
            </select>
        </div>
        </div>
    </section>
    <p name="titulo_historia_escrever_preview" id="titulo_historia_escrever_preview" class="titulo">Titulo</p>
    <section class="leitura">
        <div class="folha">
            <p name="historia_preview_post" id="historia_preview_post" class="historia">Lorem ipsum, dolor sit amet
                consectetur adipisicing elit. Nobis vel culpa, laudantium cum eaque blanditiis beatae molestias
                voluptatibus ad ullam odio cumque reprehenderit tempore autem dolorum ipsum harum dolores error. Lorem
                ipsum dolor sit amet consectetur adipisicing elit. Ullam tenetur vitae placeat, quae, maxime consectetur
                aliquid quaerat reprehenderit, unde iusto expedita voluptate ipsam aut laudantium iure necessitatibus
                aperiam praesentium ex! Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem animi
                recusandae eos repudiandae libero modi odit eveniet blanditiis debitis laudantium molestiae cupiditate
                hic aliquam incidunt, praesentium aperiam inventore maiores nostrum. Lorem ipsum dolor sit amet
                consectetur adipisicing elit. Quod illum quas porro nesciunt nulla inventore ut soluta temporibus
                sapiente vitae, aspernatur incidunt. Aliquid velit pariatur dolores. Corporis voluptas ut maiores? Lorem
                ipsum dolor sit amet, consectetur adipisicing elit. Nisi, dicta animi! Hic voluptates voluptatum magnam
                illo in quae vel, facilis commodi ex numquam laboriosam quas sint cupiditate dolorem nihil incidunt.
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum ad repellendus in ex fuga ipsa
                consequuntur dolorem modi quam excepturi, illo necessitatibus debitis vitae doloribus, eligendi
                repudiandae? Soluta, ipsa hic! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat,
                impedit? Asperiores dignissimos expedita aliquam sed repellat soluta ab, eius labore a tenetur neque
                quos quod eveniet qui eligendi distinctio aut. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Autem iusto quo, maiores voluptatum minus quidem adipisci aliquam nemo natus, animi, doloremque eius
                quam minima voluptatem similique distinctio eveniet harum dolore! Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Laborum iusto reprehenderit, odio nihil cupiditate neque pariatur impedit ex totam id
                alias veniam atque. Iusto ipsum, adipisci sit ut consectetur eum! Lorem ipsum, dolor sit amet
                consectetur adipisicing elit. Eos eveniet odio ab quisquam autem aliquam dolore ad illum amet, tempore
                qui! Quia amet excepturi nam perspiciatis quas autem ipsa doloremque. Lorem, ipsum dolor sit amet
                consectetur adipisicing elit. Ea quasi ratione nemo officia doloribus obcaecati excepturi quo amet
                libero, architecto, dignissimos tempore minus ipsa quibusdam necessitatibus recusandae, hic blanditiis
                aperiam!
        </div>
    </section>

    <section class="botoes_finais">
        <button type="submit" class="botoes_final">Publicar</button>
        <button class="botoes_final">Editar</button>
    </section>


    <footer>
        <div class="footer_primera_parte">
            <img src="../perfil/estilo/imagens/logo_footer.png" alt="logo do site">
            <p class="formatacao">© 2022 E-book Square. </p>
        </div>
        <div class="footer_segunda_parte">
            <ul>
                <a href="../FAQ/FAQ.php">
                    <li class="formatacao link_footer">Ajuda/FAQ</li>
                </a>
                <a href="../../Sobre_Nos.php">
                    <li class="formatacao link_footer">Sobres nós</li>
                </a>
                <a href="../../contato.php">
                    <li class="formatacao link_footer">Suporte</li>
                </a>
            </ul>
        </div>
        <div class="footer_terceira_parte">
            <ul>
                <a href="../Pagina inicial/pagina_inicial.php">
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