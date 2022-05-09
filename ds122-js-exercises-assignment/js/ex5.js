var s = "Aula de web1";

function contaLetras(s, c) {
    var tamanho = s.length;
    var iguais = 0;

    for (i = 0; i < tamanho; i++) {
        if (s[i] === c) {
            iguais++;
        }
    }

    return iguais;
}

console.log(contaLetras(s, "e"));