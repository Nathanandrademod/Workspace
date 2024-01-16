/*Por fim, no emulador a seguir,
temos a estrutura if sendo usada de uma maneira mais elaborada,
com mais de duas condições,
combinação dos operadores && e II, assim como o uso do operador lógico de negação NOT ( ! ):
*/ 

var c = 5;
var d = -1;
var e = false; // valores possíveis -> True, False

console.log("if com mais de duas condições e combinação de && e ||:");
if ((c > d && d > 0) || (c > d && d <= 0)){
    console.log("c é maior que d E d é um número positivo");
    console.log("OU");
    console.log("c é maior que d E d não é um número positivo");
}
console.log("if com condição não verdadeira:");
if (!e){
    console.log("e tem valor false");
}