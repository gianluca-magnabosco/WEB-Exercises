var a = [1, 2, 3];

inverte = function(a) {
    var tamanho = a.length;
    var y = 0;

    for (i = 0; i <= ((tamanho - 1) / 2); i++) {
        y = a[i];
        a[i] = a[tamanho - 1 - i];
        a[tamanho - 1 - i] = y;
    }

    return a;
}

b = inverte(a);

console.log(b);