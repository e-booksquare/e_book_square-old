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
    
        function categoria() {
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
                    novo_categoria.setAttribute("name", "categoria" + quantidade);
                    novo_categoria.setAttribute("id", "categoria" + quantidade);
                    novo_categoria.style.backgroundColor = cor;
                    let elemento = document.querySelector('.elementos_aqui');
                    elemento.appendChild(novo_categoria);
                }
            }  
        }  