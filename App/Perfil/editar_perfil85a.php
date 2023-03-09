<?php
include_once 'verificacao2.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/IMAGENS/logo-removebg-preview.png" type="image/x-icon">
    <title>Editar //
        <?= $dados_usuario['codigo']; ?>
    </title>
    <link rel="stylesheet" href="../../header e footer\header.css">
    <link rel="stylesheet" href="../../header e footer\footer.css">
    <link rel="stylesheet" href="Estilo/css/editar_perfil.css">
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
                        <a href="Perfil.php">
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
                                <a href="#">
            <li class="opcoes_dropdown">Chat</li></a>
            <a href="#">
                <li class="opcoes_dropdown">Enviar menssagem</li>
            </a>
            <a href="#">
                <li class="opcoes_dropdown">Denunciar perfil</li>
            </a>
            <a href="editar_perfil.php">
                <li class="opcoes_dropdown">Editar perfil</li>
            </a>
            <a href="perfil.php?deslogar">
                <li class="opcoes_dropdown">Sair</li>
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

    <form action="php_action/editar_db.php" method="post" enctype="multipart/form-data">

        <!-- Alterar banner -->
        <div class="banner_editar">
            <img src="
                    <?php if (empty($dados_usuario['banner'])) { ?>
                        ../assets/IMAGENS/blank.png
                    <?php } else { ?>
                        ../assets/IMAGEM_USUARIO/<?= $dados_usuario['banner'];
                    } ?>
                        " alt="" style="width: 100%;" id="banner_perfil">
            <button type="submit" style="cursor: pointer;" name="deleteBanner"><img class="lixeira_banner"
                    src="ESTILO\Imagens\icon_remover.png" alt=""></button>

            <!-- Alterar imagem perfil -->
            <div class="imagem_perfil_editar">
                <img class="img_perfil" src="
                    <?php if (empty($dados_usuario['foto'])) { ?>
                        ../assets/IMAGENS/blank.png
                    <?php } else { ?>
                        ../assets/IMAGEM_USUARIO/<?= $dados_usuario['foto'];
                    } ?>
                        " alt="" style="width: 100%;" id="icon_perfil">
                <button type="submit" style="cursor: pointer;" name="deleteImagemPerfil"><img class="lixeira"
                        src="ESTILO\Imagens\icon_remover.png" alt=""></button>
            </div>
        </div>
        <!-- Alterar banner Fim-->
        <!-- Alterar imagem perfil Fim-->
        <div class="container_trocar_imagens">
            <label class="Botao_trocar_banner" for="file_banner_perfil">Trocar Banner</label>
            <label class="Botao_trocar_perfil" for="foto_perfil">Trocar Imagem de Perfil</label>
        </div>
        <input type="file" name="banner" id="file_banner_perfil" style="display:none;" accept="image/*">
        <input type="file" name="foto_perfil" id="foto_perfil" style="display: none;" accept="image/*"> <br> <br>


        <div class="container_informacoes_usuario">
            <input type="hidden" name="id" value="<?= $_SESSION['ID_user']; ?>">

            <p class="Titulo_trocar_descricao">Mudar informações</p>

            <input class="trocar_nome trocar_informacoes" type="text" name="nome" id=""
                value="<?= $dados_usuario['nome'] ?>"> <br>

            <input class="troca_codigo trocar_informacoes" type="text" name="codigo" id=""
                value="<?= $dados_usuario['codigo'] ?>"> <br>

            <input class="trocar_email trocar_informacoes" type="email" name="email" id=""
                value="<?= $dados_usuario['email'] ?>"> <br>

            <hr style=" border-color: black; width:90%; margin-bottom: 30px;margin-top: 20px;">

            <label class="Titulo_trocar_descricao" for="descricao">Alterar descrição:</label>
            <textarea onClick="this.setSelectionRange(0, this.value.length)" name="descricao" id="descricao" cols="30"
                rows="10" maxlength="1000" runat="server"
                style="resize: none;"><?= $dados_usuario['descricao'] ?></textarea>
            <div class="limitador">
                <span id="aviso_limite"></span>
                <span id="limite_char" style="margin-top: 2px; text-align: right;"></span>
            </div>

            <hr style=" border-color: black; width:90%; margin-bottom: 30px;margin-top: 20px;">

            <p class="Titulo_trocar_descricao">Contato e Doações</p>


            <div class="contato_doacoes">
                <div class="container_tel containers_contatos">
                    <img src="ESTILO\Imagens\logo_whatsapp.png" alt="">
                    <input class="Numero_contato input_doacoes" value="<?= $dados_usuario['tel_contato_what'] ?>"
                        placeholder="Não definido" type="text" name="tel_contato_what" id="tel_contato_what"
                        value="Não definido" onClick="this.setSelectionRange(0, this.value.length)">
                </div>
                <div class="container_discord containers_contatos">
                    <img src="ESTILO\Imagens\logo_discord.png" alt="">
                    <input class="Discord_contato input_doacoes" value="<?= $dados_usuario['discord'] ?>"
                        placeholder="Não definido" ype="text" name="discord" id="discord" value="Não definido"
                        onClick="this.setSelectionRange(0, this.value.length)">
                    <input class="codigo_discord" type="number" value="<?= $dados_usuario['codigo_discord'] ?>"
                        placeholder="#0000" id="codigo_discord" name="codigo_discord">
                </div>
                <div class="container_face containers_contatos">
                    <img src="ESTILO\Imagens\logo_face.png" alt="">
                    <input class="Face_contato input_doacoes" value="<?= $dados_usuario['facebook'] ?>"
                        placeholder="Não definido" type="text" name="facebook" id="facebook" value="Não definido"
                        onClick="this.setSelectionRange(0, this.value.length)">
                </div>
                <div class="container_pix containers_contatos">
                    <img src="ESTILO\Imagens\logo_pix.png" alt="">
                    <input class="Pix_contato input_doacoes" value="<?= $dados_usuario['pix'] ?>"
                        placeholder="Não definido" type="text" name="pix" id="pix" value="Não definido"
                        onClick="this.setSelectionRange(0, this.value.length)">
                </div>
            </div>

            <div class="salvar_voltar">
                <button class="salvar" type="submit" style=" cursor: pointer;" name="atualizar"
                    id="submit">Salvar</button>
                <a class="voltar" href="perfil.php">voltar</a>
            </div>
        </div>
    </form>

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

    <script src="ESTILO/JS/limitador_desc.js"></script>
    <script src="ESTILO/JS/preview_image.js"></script>
    <script src="ESTILO/JS/preview_banner.js"></script>
    <script src="ESTILO/JS/textarea.js"></script>
    <script src="ESTILO/JS/Selecionar.js"></script>
</body>

</html>