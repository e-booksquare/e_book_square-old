<?php
    include_once 'verificacao2.php'; 
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/IMAGENS/logo-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="ESTILO/CSS/perfil.css">
    <link rel="stylesheet" href="../../header e footer/header.css">
    <link rel="stylesheet" href="../../header e footer/footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <title><?=$dados_usuario['codigo'];?> | E-Book Square </title>
</head>

<body>
<header>
    <div class="container-header">
            <div class="img-logo-header">
                <img src="../../app/assets/IMAGENS/logo.jpg" alt="" class="logo-header">
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
                    <label onclick="clique_perfil()" for="dropdown_perfil" id="nome" name="nome"><?=$dados_usuario['nome'];?> </label>
                    <svg id="dropdown_perfil_girar" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                    </svg></p>
                    <div class="avatar-header">
                    <a href="app\Perfil\Perfil.php">
                        <img src="../perfil/estilo/imagens/Avatar_test.jpg" alt="Foto de perfil" name="perfil" id="perfil-header">
                    </a>
                    </div>
                    <input id="dropdown_perfil_input" class="checkbox_perfil" type="checkbox">
                    <div class="nada" id="dropdown_perfil">
                        <nav>
                            <div>
                                <a  href="#"><li class="opcoes_dropdown">Chat</li></a>
                                <a href="#"><li class="opcoes_dropdown">Enviar menssagem</li></a>
                                <a href="#"><li class="opcoes_dropdown">Denunciar perfil</li></a>
                                <a href="#"><li class="opcoes_dropdown">Editar perfil</li></a>
                                <a href="perfil.php?deslogar"><li class="opcoes_dropdown">Sair</li></a>
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
    <main>
        <form action="" method="post">
            <div class="fundo">
                <img src="../assets/IMAGENS/images.jpg" alt="Foto de fundo do perfil">
                <div class="icone">
                    <div class="avatar">
                        <img src="ESTILO/Imagens/Avatar_Test.jpg" alt="Foto de perfil" name="perfil" id="perfil">
                    </div>
                </div>
                <div class="informacoes">
                    <p id="nome" name="nome"><?=$dados_usuario['codigo'];?></p>
                    <p id="email" name="email"><?=$dados_usuario['email'];?></p>
                </div>
            </div>


            <div class="opcoes">
                <div class="sobre_usuario">
                     <p> Obras: 
                        <span id="obra" name="obra">00</span>
                    </p>

                    <p> Seguidores: 
                        <span id="seguidores" name="seguidores">00</span>
                    </p>

                    <p> Rank: 
                        <span id="rank" name="rank">00</span>
                    </p>
                </div>
                <div class="botao_opcoes Seguir">
                    <button class="botao_seguir" name="seguir" id="seguir"><span>+ </span>Seguir</button>
                </div>
            </div>

            <div class="conteudo_perfil">
                <div class="Container_Descricao">
                    <div class="descricao">
                    <p class="titulo_descricao">Descrição</p>
                        <p name="descricao" id="descricao">
                            <?=$dados_usuario['descricao'];?>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae quo odio fuga ipsum recusandae temporibus iste, commodi, perspiciatis nulla dolorem tempora quisquam quibusdam voluptas assumenda placeat, hic aut facere earum!
                        </p>
                        <div id="div-desc"></div>
                        <p style="font-size: 14px; margin: 10px 0px 0px; text-align: center; ">Se juntou em: <span style="font-style: italic; color: #d40743 ">21/11/2022</span></p>
                    </div>
                </div>
                <div class="container-obras">
                    <div class="nav-main">
                        <ul style="display:flex; align-items: center; gap: 15px; margin-bottom: 45px; list-style-type: none; ">
                        <a href="Perfil.php" ><li class="titulo_obras" style=" color: rgba(0,0,0,.600); border-left: 2px solid #d40743; padding-left: 15px;">Obras</li></a>

                        <a href="Obras favoritas.php" ><li class="titulo_obras" style="padding-left: 15px; color: rgba(0,0,0,.600); font-size: 25px;">Obras favoritas</li> </a>

                        <a href="Obras lendo.php" ><li class="titulo_obras" style=" padding-left: 15px; font-size: 25px;">Lendo</li> </a>
                        </ul>
                    </div>
                    

                    <table class="conjuntos obras">
                        <tr>
                        <a href="#">
                            <div class="obras">
                                <div class="container_editar_remover" >
                                    <div class="editar">
                                        <a href=""><img src="ESTILO\Imagens\icon_editar.png"></a>
                                    </div>
                                    <div class="remover">
                                        <a href=""><img src="ESTILO\Imagens\icon_remover.png"></a>
                                    </div>
                                </div>
                                <div class="foto_obras">
                                    <img src="ESTILO/Imagens/imagem Test obra.webp" alt="Imagem da obra">
                                </div>
                                <div>
                                    <div class="informacoes_Obras" style="margin-left: 10px; padding: 10px;">
                                        <ul>
                                            <li class="Nome_Obra" id="Nome_Obra" name="Nome_Obra">
                                                Lore Kindred
                                            </li>
                                            <li class="Nome_Autor" id="Nome_Autor" name="Nome_Autor">
                                                <p id="nome" name="nome"><?=$dados_usuario['nome'];?></p>
                                            </li>
                                            <li class="Descri_Obra" id="Descri_Obra" name="Descri_Obra">
                                            <p class="titulo-desc-obra">Descrição:</p>
                                                <p>Distintos, mas nunca separados, os Kindred representam as essências gêmeas da morte. O arco da Ovelha propicia uma rápida transição do mundo mortal para aqueles que aceitam seu destino. O Lobo caça aqueles que fogem de seu fim, entregando-lhes a violência derradeira de suas presas esmagadoras. Embora diferentes interpretações sobre a natureza dos Kindred circulem por toda Runeterra, todo mortal deve escolher a verdadeira face de sua morte.</p>
                                            </li>

                                            <li>
                                                <p style="font-weight: 600;">Avaliações:</p>
                                                <p><span style="color: goldenrod;">24%</span> positivas</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            </a>
                        </tr>

                        <tr>
                        <a href="#">
                            <div class="obras">
                            <div class="container_editar_remover" >
                                    <div class="editar">
                                        <a href=""><img src="ESTILO\Imagens\icon_editar.png"></a>
                                    </div>
                                    <div class="remover">
                                        <a href=""><img src="ESTILO\Imagens\icon_remover.png"></a>
                                    </div>
                                </div>
                                <div class="foto_obras">
                                    <img src="../assets/IMAGENS/terror-img.jpg" alt="Imagem da obra">
                                </div>
                                <div>
                                    <div class="informacoes_Obras" style="margin-left: 10px; padding: 10px;">
                                        <ul>
                                            <li class="Nome_Obra" id="Nome_Obra" name="Nome_Obra">
                                                Terror
                                            </li>
                                            <li class="Nome_Autor" id="Nome_Autor" name="Nome_Autor">
                                                <p id="nome" name="nome"><?=$dados_usuario['nome'];?></p>
                                            </li>
                                            <li class="Descri_Obra" id="Descri_Obra" name="Descri_Obra">
                                            <p class="titulo-desc-obra">Descrição:</p>
                                                <p>   As pessoas acham que ele não passa de uma lenda, apenas uma creepypasta assustadora, mas que não é real. Bem, eu tenho algo a dizer sobre isso, ele é real sim, e sei disso porque eu mesma o vi quando eu tinha seis anos, eu mesma presenciei o terror que ele capaz de causar e eu mesma vou matá-lo... Pelo menos era isso que eu queria antes de ser sequestrada por ele e a história seguir um rumo completamente diferente do que eu havia imaginado.</p>
                                            </li>

                                            <li>
                                                <p style="font-weight: 600;">Avaliações:</p>
                                                <p><span style="color: goldenrod;">76%</span> positivas</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            </a>
                        </tr>
                    </table>
                    
                    <!-- Só ira aparecer caso tenha mais de 3 obras  -->
                   <div class="ver_mais_obras">
                        <a href="Ver_mais_obras.php">Ver mais</a>
                    </div>
                </div>

            </div>

            <hr>
            <br><br><br>
            <p class="titulo_contato">INFORMAÇÕES DE CONTATO E DOAÇÕES</p>
            <div class="contato_doacoes">
                <div class="container_tel containers_contatos">
                    <img src="ESTILO\Imagens\logo_whatsapp.png" alt="">
                    <p class="Numero_contato">18 997476957<p>
                </div>
                <div class="container_discord containers_contatos">
                    <img src="ESTILO\Imagens\logo_discord.png" alt="">
                    <p class="Discord_contato">@macoasas<p>
                </div>
                <div class="container_face containers_contatos">
                    <img src="ESTILO\Imagens\logo_face.png" alt="">
                    <p class="Face_contato">Maicon Junior<p>
                </div>
                <div class="container_pix containers_contatos">
                    <img src="ESTILO\Imagens\logo_pix.png" alt="">
                    <p class="Pix_contato">+5518997476957<p>
                </div>

            </div>
        </form>
    </main>


    <footer>
    <div class="footer_primera_parte">
           <img src="estilo/imagens/logo_footer.png" alt="logo do site">
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

