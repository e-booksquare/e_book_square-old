<?php
    include_once 'verificacao2.php';
    
    $Obra_Usuario_Count = $classLog->Obra_Usuario_Count($_SESSION['ID_user']);
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

<body id="topo">

<section id="tela_remover" class="tela_remover desativo">
        <div class="container_remover">
            <div class="container_texto_remover">
                <p class="texto_remover">Deseja remover essa historia?</p>
                <p class="letras_miudas">Depois de excluido a historia será apagada e não terá como recupera-la</p>
            </div>
            <div class="botoes_remover">
                <button  onclick="cancelar()" class="remover_botao" type="submit">Excluir</button>
                <button  id="cancelar" onclick="cancelar()" class="cancelar_botao_remover">Cancelar</button>
            </div>
        </div>               
    </section>

<header id="header" class="">
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
                    <a href="Perfil.php">
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
                            <a  href="perfil.php"><li class="opcoes_dropdown">Meu perfil</li></a>
                                <a  href="#"><li class="opcoes_dropdown">Chat</li></a>
                                <a href="#"><li class="opcoes_dropdown">Notificações</li></a>
                                <a href="editar_perfil.php"><li class="opcoes_dropdown">Editar perfil</li></a>
                                <a href="configuracao/conta.php"><li class="opcoes_dropdown">Configurações</li></a>
                                <a href="#"><li class="opcoes_dropdown">Ajuda</li></a>
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
    <main id="main" class="">
        <form action="" method="post">
            <div class="fundo">
            
                <?php if(isset($dados_usuario['banner']) && !empty($dados_usuario['banner'])){ ?>
                   <img src="  ../assets/IMAGEM_USUARIO/<?= $dados_usuario['banner'];?>" alt="Foto de fundo do perfil">
                <?php } else{?>
                    <!-- add aqui a tag img com diretório do banner padrãp caso queira -->
                <?php }?> 
                <div class="icone">
                    <div class="avatar">
                        <img src="
                        <?php if(isset($dados_usuario['foto']) && !empty($dados_usuario['foto'])){ ?>
                        ../assets/IMAGEM_USUARIO/<?= $dados_usuario['foto'];?>
                    <?php } else{?>
                        ../assets/IMAGENS/blank.png
                    <?php }?>    
                        
                        " alt="Foto de perfil" name="perfil" id="perfil">
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
                        <span id="obra" name="obra"><?=$Obra_Usuario_Count['count(ID_obra)'];?></span> 
                    </p>

                    <p> Seguidores: 
                        <span id="seguidores" name="seguidores"><?=$Seguidor_user['count(user_FK)'];?></span>
                    </p>

                    <p> Rank: 
                        <span id="rank" name="rank">Unranked</span>
                    </p>
                </div>
                    <?php if(
                        isset($_SESSION['ID_user']) && !empty($_SESSION['ID_user']) && $_SESSION['ID_user'] == $dados_usuario['ID_user']):        
                    else: ?>
                    
                <div class="botao_opcoes Seguir">
                    <button class="botao_seguir" name="seguir" id="seguir"><span>+ </span>Seguir</button>
                </div>
                <?php endif; ?>
            </div>

            <div class="conteudo_perfil">
                <div class="Container_Descricao">
                    <div class="descricao">
                    <p class="titulo_descricao">Descrição</p>
                        <p name="descricao" id="descricao">

                            <?php 
                            if(!empty($dados_usuario['descricao'])){
                                echo $dados_usuario['descricao']; 
                            } else{
                            ?>
                            <p id="desc_content" style="opacity: 40%; text-align: center; margin: 0 0 20px">
                                <span>*Bem vindos ao meu perfil !!</span>  
                            </p>
                            <?php
                            }
                            ?>

                        </p>
                        <div id="div-desc"></div>
                        <p style="font-size: 14px; margin: 10px 0px 0px; text-align: center; ">Se juntou em: <span style="font-style: italic; color: #d40743 "><?=$dados_usuario['data_cad'];?></span></p>
                    </div>
                </div>
                <div class="container-obras">
                    <div class="nav-main">
                        <ul style="display:flex; align-items: center; gap: 15px; margin-bottom: 45px; list-style-type: none; ">
                        <a href="Perfil.php" ><li class="titulo_obras" style=" border-left: 2px solid #d40743; padding-left: 15px;">Obras</li></a>
                        </ul>
                    </div>
                    

                    <table class="conjuntos obras">
                        <tr>
                            
                            <div class="obras">
                                <div class="container_editar_remover" >
                                    <div class="editar">
                                        <a href=""><img src="ESTILO\Imagens\icon_editar.png"></a>
                                    </div>
                                    <div class="remover">
                                    <a href="#topo" name="remover" id="remover" onclick="remover()"><img src="ESTILO\Imagens\icon_remover.png"></a>
                                    </div>
                                </div>
                                <div class="categoria">
                                    <div class="Acao classe_categoria">Ação</div>
                                    <div class="Aventura classe_categoria">Aventura</div>
                                    <div class="Terror classe_categoria">Terror</div>
                                    <div class="Fantasia classe_categoria">Fantasia</div>
                                    <div class="Humor classe_categoria">Humor</div>
                                    <div class="Ficção classe_categoria">Ficção</div>
                                    <div class="Romace classe_categoria">Romace</div>
                                    <div class="Conto classe_categoria">Conto</div>
                                </div>
                                <a href="#">
                                <div class="foto_obras">
                                    <img src="ESTILO/Imagens/imagem Test obra.webp" alt="Imagem da obra">
                                </div>
                                <div>
                                    <div class="informacoes_Obras" style="margin-left: 10px; padding: 10px;">
                                        <ul>
                                            <li class="Nome_Obra" id="Nome_Obra" name="Nome_Obra">
                                                Lore Kindred
                                            </li></a>
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
                        </tr>

                        <tr>
                        <a href="#">
                            <div class="obras">
                                <div class="container_editar_remover" >
                                    <div class="editar">
                                        <a href="#"><img src="ESTILO\Imagens\icon_editar.png"></a>
                                    </div>
                                    <div class="remover">
                                    <a href="#topo" name="remover" id="remover" onclick="remover()"><img src="ESTILO\Imagens\icon_remover.png"></a>
                                    </div>
                                </div>
                                <div class="categoria">
                                    <div class="Acao classe_categoria">Ação</div>
                                    <div class="Aventura classe_categoria">Aventura</div>
                                    <div class="Terror classe_categoria">Terror</div>
                                    <div class="Fantasia classe_categoria">Fantasia</div>
                                    <div class="Humor classe_categoria">Humor</div>
                                    <div class="Ficção classe_categoria">Ficção</div>
                                    <div class="Romace classe_categoria">Romace</div>
                                    <div class="Conto classe_categoria">Conto</div>
                                </div>
                                <a href="#">
                                <div class="foto_obras">
                                    <img src="../assets/IMAGENS/terror-img.jpg" alt="Imagem da obra">
                                </div>
                                <div>
                                    <div class="informacoes_Obras" style="margin-left: 10px; padding: 10px;">
                                        <ul>
                                            <li class="Nome_Obra" id="Nome_Obra" name="Nome_Obra">
                                                Terror
                                            </li> </a>
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
                    <p class="Numero_contato"><?=$dados_usuario['tel_contato_what'];?><p>
                </div>
                <div class="container_discord containers_contatos">
                    <img src="ESTILO\Imagens\logo_discord.png" alt="">
                    <p class="Discord_contato"><?=$dados_usuario['discord'];?><span> #<?=$dados_usuario['codigo_discord'];?></span><p>
                </div>
                <div class="container_face containers_contatos">
                    <img src="ESTILO\Imagens\logo_face.png" alt="">
                    <p class="Face_contato"><?=$dados_usuario['facebook'];?><p>
                </div>
                <div class="container_pix containers_contatos">
                    <img src="ESTILO\Imagens\logo_pix.png" alt="">
                    <p class="Pix_contato"><?=$dados_usuario['pix'];?><p>
                </div>

            </div>
        </form>
    </main>
    <footer id="footer" class="">
        <div class="footer_primera_parte">
           <img src="estilo/imagens/logo_footer.png" alt="logo do site">
           <p class="formatacao">© 2022 E-book Square. </p>
       </div>
       <div class="footer_segunda_parte">
           <ul>
               <a href="../FAQ/FAQ.php"><li class="formatacao link_footer">Ajuda/FAQ</li></a>
               <a href="../../Sobre_Nos.php"><li class="formatacao link_footer">Sobres nós</li></a>
               <a href="../../contato.php"><li class="formatacao link_footer">Suporte</li></a>
           </ul>
       </div>
       <div class="footer_terceira_parte">
           <ul>
               <a href="../Pagina inicial/pagina_inicial.php"><li class="formatacao link_footer">Ler histórias</li>
               <a href="#"><li class="formatacao link_footer">Diretrizes da comunidade</li></a>
           </ul>
       </div>
       <div class="footer_quarta_parte">
           <ul>
               <li class="formatacao">É uma plataforma para autopublicação de Livros. Solte sua imaginação, escreva suas histórias, tenha sua própria página personalizada, compartilhe idéias, faça amizades</li>
       </div>

    </footer>


    <script>
        function remover(){
            document.querySelector("#header").classList.add("filtro");
            document.querySelector("#main").classList.add("filtro");
            document.querySelector("#footer").classList.add("filtro");
            document.querySelector("#tela_remover").classList.remove("desativo");
            document.querySelector("#tela_remover").classList.add("ativo");
        }
        function cancelar(){
            document.querySelector("#header").classList.remove("filtro");
            document.querySelector("#main").classList.remove("filtro");
            document.querySelector("#footer").classList.remove("filtro");
            document.querySelector("#tela_remover").classList.add("desativo");
            document.querySelector("#tela_remover").classList.remve("ativo");
        }
    </script>
</body>

</html>

