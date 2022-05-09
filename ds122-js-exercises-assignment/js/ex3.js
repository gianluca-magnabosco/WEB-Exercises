var a = [1, 2, 3];

soma = function(a) {
    var tamanho = a.length;
    var total = 0;

    for (i = 0; i < tamanho; i++) {
        total += a[i];
    }

    return total;
}

console.log(soma(a));