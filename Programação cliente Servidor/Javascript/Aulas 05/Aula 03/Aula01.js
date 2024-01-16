/* ARROW FUNCTIONS
Uma importante novidade foi introduzida na especificação Javascript ES6, 
as arrow functions, que podem ser definidas como uma forma mais simples de se criar 
funções em JS. Veja um exemplo em que uma arrow function que 
faz a multiplicação de dois números é criada e utilizada: */

const multiplicacao = (n1, n2) => {
return n1 * n2;
}
console.log(multiplicacao(3, 2)); //imprimirá 6

/*Quando uma função possuir apenas uma expressão – no exemplo anterior, 
a única instrução é retornar à multiplicação dos dois números recebidos 
como parâmetros –, a sua sintaxe pode ser ainda mais simples. 
Veja como ficaria, nesse caso, o exemplo anterior: */

  
const multiplicacaao = (n1, n2) => n1 * n2;
console.log(multiplicacao(3, 5)); //imprimirá 15

/*Por último, confira um comparativo onde o método JS map pode 
ser definido e utilizado com e sem arrow function: continua na aula 2*/

