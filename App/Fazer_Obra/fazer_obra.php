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
    <link rel="stylesheet" href="estilo/css/fazer_obra.css">
    <link rel="stylesheet" href="estilo/css/pagina_de_escrever.css">
    <link rel="stylesheet" href="../../header e footer/header.css">
    <link rel="stylesheet" href="../../header e footer/footer.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <title><?=$dados_usuario['codigo'];?> | E-Book Square </title>
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
        
        <main>
            <div class="divisao_foto_form">
                <div class="container_adicionar_foto">
                    <div class="container_obra">

                            <form action="fazer_obra_bd.php" method="post">
                            <label for="foto_obra" class="selecao_upload">
                                <h3 class="titulo_tamanho_foto">Upload a capa frontal</h3>
                                <p class="texto_tamanho_foto"> Adicione uma imagem para capa da sua historia, recomenda-se ter o tamanho 150x230 pixels e ser de classificação etaria livre.
                                <div class="foto_obra">
                                    <img src="estilo/imagens/icon_subir_imagem.png">
                                    Adicionar uma imagem
                                </div>
                            </label>
                        </div>
                    <input type="file" name="foto_obra" id="foto_obra" disabled>
                </div>
                <div class="container_form_sobre_obra">
                    <h4>Titulo da obra</h4>
                    <input class="titulo_obra_fazer_obra" type="text" name="titulo_obra_fazer_obra" id="titulo_obra_fazer_obra">
                    <h4 style="margin-bottom: 20px;">Sinopse da hístoria:</h4>
                    <p style="margin-bottom: 10px;">Esse campo deve-rá conter um breve resumo da historia ou um pequeno trecho da mesma.</p>
                    <textarea class="sinopse" id="sinopse_fazer_obra" name="sinopse_fazer_obra" rows="5" maxlength="1000" runat="server" style="resize: none;"></textarea>
                    <div>
                        <h4>Classificação etaria</h4>
                        <select  class="etaria" id="etaria" onchange="etaria_select_value()">
                            <option value="escolher" selected disabled>Escolher</option>
                            <option value="Adulto">Adulto</option>
                            <option value="Adolescente">Adolescente</option>
                            <option value="Livre">Livre</option>
                        </select>
                        <input type="hidden" name="etaria" id="etaria_input">
                    </div>
                    <div class="div_selecionar_categoria">
                        <h4>Categoria da historia</h4>
                        <div class="selecionar_categoria">
                            <Select id="categoria">
                                <option value="1" selected disabled>Selecionar</option>
                                <option value="2" id="acao">Acao</option>
                                <option value="3" id="aventura">Aventura</option>
                                <option value="4" id="terror">Terror</option>
                                <option value="5" id="fantasia">Fantasia</option>
                                <option value="6" id="humor">Humor</option>
                                <option value="7" id="ficcao">Ficcao</option>
                                <option value="8" id="romance">Romance</option>
                                <option value="9" id="conto">Conto</option>
                            </Select>
                            <input type="hidden" name="categoria" id="categoria_input" value="[]">
                            <p class="botao_adicionar" onclick="categoria()">Adicionar</p>
                        </div>
                        <div class="elementos_aqui" id="elementos_aqui"></div>
                    </div>
                </div>
            </div>

            <input type="hidden" name="user_FK" value="<?= $_SESSION['ID_user'];?>">
            <input type="hidden" name="ID_obra" value="<?= $_SESSION['ID_obra_recente'];?>">

            <input type="submit" value="Enviar">
            <!-- <div class="botao_comecar_escrever">
                <a href="escrever.php" class="comecar_escrever" id="botao_escrever" onclick="Botao_escrever()">Escrever agora</a>
            </div> -->
        </main>
    </form>


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
    <script>

    var x = 1;
    var quantidade = 0; 
    var trava = 0;
    var acao = 0;
    var aventura = 0;
    var terror = 0;
    var fantasia = 0;
    var humor = 0;
    var ficcao = 0;
    var romance = 0;
    var conto = 0;
    let categoriaSelecionada = [];

    function etaria_select_value(){
        var input_etaria = document.getElementById('etaria_input');
        var select_etaria = document.getElementById('etaria');
        var valor_etaria = select_etaria.options[select_etaria.selectedIndex].value;

        input_etaria.value = valor_etaria
        console.log(input_etaria.value)
    }



        function categoria() {
            var input_categoria = document.getElementById('categoria_input');
            var select = document.getElementById('categoria');
            var texto = select.options[select.selectedIndex].text;
            var valor = select.options[select.selectedIndex].value;


            if(texto == "Selecionar"){

            }else{
                //acao
                if(valor == 2){
                    if(acao == 1){
                        trava = 1;
                    }else{
                        acao = 1;
                        trava = 0;
                    }
                //aventura
                }else if(valor == 3){
                    if(aventura == 1){
                        trava = 1;
                    }else{
                        aventura = 1;
                        trava = 0;
                    }
                //terror
                }else if(valor == 4){
                    if(terror == 1){
                        trava = 1;
                    }else{
                        terror = 1;
                        trava = 0;
                    }
                //fantasia
                }else if(valor == 5){
                    if(fantasia == 1){
                        trava = 1;
                    }else{
                        fantasia = 1;
                        trava = 0;
                    }
                //humor
                }else if(valor == 6){
                    if(humor == 1){
                        trava = 1;
                    }else{
                        humor = 1;
                        trava = 0;
                    }
                //ficcao
                }else if(valor == 7){
                    if(ficcao == 1){
                        trava = 1;
                    }else{
                        ficcao = 1;
                        trava = 0;
                    } 
                //romance
                }else if(valor == 8){
                    if(romance == 1){
                        trava = 1;
                    }else{
                        romance = 1;
                        trava = 0;
                    } 
                //conto
                }else if(valor == 9){
                    if(conto == 1){
                        trava = 1;
                    }else{
                        conto = 1;
                        trava = 0;
                    }
                } 
                       
                if(quantidade <= 10 && trava == 0){
                    quantidade = quantidade + 1;
                    var hexadecimais = '0123456789ABCDEF';
                    var cor = '#';
                    // Pega um número aleatório no array acima
                    for (var i = 0; i < 6; i++ ) {
                        //E concatena à variável cor
                        cor += hexadecimais[Math.floor(Math.random() * 16)];
                    }
                    var numeracao = texto;
                    var x = x + 1;
                    let novo_categoria = document.createElement('p');
                    novo_categoria.className = "categoria";
                    novo_categoria.innerHTML = numeracao;
                    novo_categoria.setAttribute("id", "categoria" + quantidade);
                    novo_categoria.style.backgroundColor = cor;
                    let elemento = document.querySelector('.elementos_aqui');
                    elemento.appendChild(novo_categoria);

                    categoriaSelecionada.push(texto)
                    console.log(categoriaSelecionada)
                    input_categoria.value = categoriaSelecionada
                    console.log(input_categoria.value)
                    
                }
            }  
        }    
    </script>
</body>

</html>

