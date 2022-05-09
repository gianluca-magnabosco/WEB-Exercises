var s = "Aula de web1";

function procuraSubStr(s, subS) {
    var tamanhoString = s.length;
    var tamanhoSubStr = subS.length;
    var iguais = 0;

    for (i = 0; i < tamanhoString - tamanhoSubStr + 1; i++) {
        
        iguais = 0;

        for (j = 0; j < tamanhoSubStr; j++) {

            if(s[i+j] == subS[j]) {
                a = i + j;
                iguais++;
            } else {
                
                break;
            }   

            if(iguais == tamanhoSubStr) {
                return a - tamanhoSubStr + 1;
            }
        }
    }

    return -1;
}

console.log(procuraSubStr(s, "web1"));

console.log(procuraSubStr(s, "web2"));