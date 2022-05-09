$(function(){
    var bancoDePalavras = ["sagaz", "negro", "amago", "exito", "mexer", "termo", "senso", "nobre", "algoz", "afeto", "plena", "etica"];
    var numeroAtual;
    var palavraUsuario;
    var palavraAtual;
    var certo;
    var counter = 0;
    var contador = 0;
    var venceu = 0;
    
    numeroAtual = (Math.floor((Math.random()) * 12)) + 1;
    
    palavraAtual = bancoDePalavras[numeroAtual - 1];
    console.log(palavraAtual);
    
    $("#botao").on("click", function(){
        counter = 0;
        certo = [0, 0, 0, 0, 0];
        var amarelo = [];
        var posicoes = [];
        var tamanhoPalavraUsuario = 0;

        palavraUsuario = ($("#input-usuario").val()).toLowerCase();
        $("#input-usuario").val("");
        tamanhoPalavraUsuario = palavraUsuario.length;

        if ((tamanhoPalavraUsuario > 5) || (tamanhoPalavraUsuario < 5)) {
            alert("Digite uma palavra de 5 letras!");
        } else {
            for (let i = 0; i < 5; i++) {
                if (palavraUsuario[i] == palavraAtual[i]) {
                    certo[i] = palavraAtual[i];
                }
            }

            $("#palavras").append('<li id= "lista' + contador + '"></li>');
            $("#lista" + contador).append("<span" + ' class="numero' + counter + '">' + palavraUsuario[0] + "</span>");
            $("#lista" + contador).append("<span" + ' class="numero' + (counter + 1) + '">' + palavraUsuario[1] + "</span>");
            $("#lista" + contador).append("<span" + ' class="numero' + (counter + 2) + '">' + palavraUsuario[2] + "</span>");
            $("#lista" + contador).append("<span" + ' class="numero' + (counter + 3) + '">' + palavraUsuario[3] + "</span>");
            $("#lista" + contador).append("<span" + ' class="numero' + (counter + 4) + '">' + palavraUsuario[4] + "</span>");


            for (let i = 0; i < 5; i++) {
                for (let j = 0; j < 5; j++) {
                    if (palavraUsuario[j] == palavraAtual[i]) {
                        amarelo.push(palavraAtual[i]);
                    }
                }
            }

            var tamanhoDoArray = amarelo.length;
            
            for (let i = 0; i < tamanhoDoArray; i++) {
                for (let j = 0; j < 5; j++) {
                    if (palavraUsuario[j] == amarelo[i]) {
                        posicoes.push(j);
                    }
                }
            }

            var tamanhoPosicoes = posicoes.length;
            for (let i = 0; i < tamanhoPosicoes; i++) {
                $("#lista" + contador + " .numero" + posicoes[i]).css("background-color", "yellow");
            }

            for (let i = 0; i < 5; i++) {
                if (palavraAtual[i] === palavraUsuario[i]) {         
                    $("#lista" + contador + " .numero" + counter).css("background-color", "green");
                }
                counter++;
            }
            contador++;           
        }

    if (palavraUsuario == palavraAtual) {
        venceu = 1;
        setTimeout(function() {
            alert("Parabens! Você venceu em " + contador + " tentativas!");
            window.location.reload();
        },0);     
    }

    if ((contador == 6) && (venceu == 0)) {
        setTimeout(function() {
            alert("Você perdeu! A palavra era: " + palavraAtual.toUpperCase());
            window.location.reload();
        },0);
    }

    });
});