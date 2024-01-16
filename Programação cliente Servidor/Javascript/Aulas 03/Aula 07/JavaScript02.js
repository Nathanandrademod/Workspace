/*
A propriedade length
Uma das necessidades mais comuns quando se trabalha com arrays é saber o seu tamanho.
Como vimos em alguns de nossos exemplos, em JavaScript está disponível a propriedade length,
que retorna o tamanho, ou número de elementos, de um array. Sua sintaxe é:                                    */

nome_do_array.length

/*
Remoção de elementos do vetor
A remoção de elementos de um array, em JavaScript, 
pode ser feita com a utilização do método nativo delete. 
Vejamos como esse método funciona utilizando nosso array de exemplo:                                          */

var frutas = ['ABACATE','MAÇA','UVA']
delete frutas[0];

/*
POP:
Este método, que não recebe parâmetros,
remove um elemento do final do array, atualizando seu tamanho. Sua sintaxe é:                                 */

frutas.pop();

/*
Embora similar ao pop,
este método remove um elemento do início do array.
Após a remoção, este é reindexado 
(ou seja, o elemento de índice 1 passa a ser o de índice 0 e assim sucessivamente). 
Além disso, o tamanho do array também é atualizado. Sua sintaxe pode ser vista a seguir:                      */

frutas.shift();

/*Este método, introduzido anteriormente, pode ser usado para exclusão de elementos.
Para tanto, ele recebe como parâmetros a quantidade de elementos que se deseja 
eliminar e o índice a partir do qual estes serão excluídos. 
A sintaxe a seguir demonstra a remoção de 2 elementos, a partir do índice 2,
do array fornecido:                                                                                          */

var primos = [2,3,5,7,11,13,17];

primos.splice(2,2);

console.log(primos); //imprimirá 2,3,11,13,17’

/*Nesse método, para fins de remoção, 
o primeiro parâmetro indica o índice e o segundo, 
a quantidade de elementos a serem excluídos.                                                                */   