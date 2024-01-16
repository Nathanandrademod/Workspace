/* O sinal “!” é utilizado para negar a condição.
As instruções 1 e 2 serão executadas caso a condição 1 não seja verdadeira.

Agora vamos praticar um pouco. Nos três emuladores de código a seguir,
apresentamos as estruturas de decisão vistas até aqui.
No primeiro emulador, temos o uso da estrutura de decisão if de maneira simples,
contendo apenas uma única condição:”*/

var a = 10;
var b = 3;

console.log ("if com uma única condição:");
if (a > b){
    console.log("a é maior que b");
}
if (a == b){
   console.log("a é igual a b"); 
}
if (a < b){
    console.log("a é menor que b");
}
if (b < a){
	console.log("b é menor que a");
}