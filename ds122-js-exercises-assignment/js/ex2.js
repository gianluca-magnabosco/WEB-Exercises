var string = "";
var tamanho = 8;

for (i = 0; i < tamanho; i++) {
    for (j = 0; j < tamanho; j++) {
        if (i % 2 === 0){
            if (j % 2 === 0) {
                string += " ";
            } else {
                string += "#";
            }
        } else {
            if (j % 2 === 0) {
                string += "#";
            } else {
                string += " ";
            }           
        }
    }
    string += "\n";
}
console.log(string);