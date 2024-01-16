/*Outras formas de remover elementos do vetor
Existem outras maneiras para excluir elementos de um array. 
Uma forma simples é determinar o tamanho do array utilizando a propriedade length. 
Isso fará com que ele seja reduzido ao novo tamanho informado. */

var primos = [2,3,5,7,11,13,17];

alert(primos.length); //imprimirá 7

primos.length = 4;

console.log(primos.length); //imprimirá 4

/*remoção utilizando length */

var frutas = ['Laranja', 'Uva', 'Limão', 'Jambo', 'Maça'];
frutas.length = 2;
console.log(frutas); //imprimirá ['Laranja', 'Uva']

/*Existe, ainda, outro método para a remoção de elementos de um array: filter. Entretanto, 
ele não modifica o vetor original, mas cria um novo a partir dele. 
Esse método utiliza uma sintaxe mais complexa, 
assim como conceitos e funções de call-back que fogem ao escopo deste tema. 


***            MUITO IMPORTANTE VEJA OS VIDEO DE EXEMPLO !!!            ***

*/