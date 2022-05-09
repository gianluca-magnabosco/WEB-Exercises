var input = document.getElementById("caixaTexto");
var lista = document.getElementById("lista");

adicionarConteudo = function() {
    var inputAtual = input.value;
    var item = document.createElement("li");

    lista.appendChild(item);
    item.innerHTML = inputAtual;
}

botao = document.getElementById("botaoInput");
botao.addEventListener("click", adicionarConteudo);