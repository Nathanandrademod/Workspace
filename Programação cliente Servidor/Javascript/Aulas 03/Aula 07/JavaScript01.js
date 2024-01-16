var alunos = []; //array vazio
var alunos = ['Alex', 'Anna', 'João']; // array de strings
var notas = [10.0, 9.5, 9.5]; // array de números decimais
var mistura = ['Um', 2, 3, 'Quatro']; //array de diversos tipos de dados

var alunos = new Array();
var alunos = new Array('Alex', 'Anna', 'João');

var alunos = ['Alex', 'Anna', 'João']; // array de strings
alert(alunos[0]); // exibirá “Alex” na caixa de diálogo

/*
push

Para compreender em que situações o método push pode
ser útil, vamos voltar ao nosso vetor “alunos”.
Imagine que, após ter sido declarado inicialmente com 3 valores,
seja necessário incluir novos valores a esse array,
em tempo de execução.
O método push nos auxilia nessa tarefa. Sua sintaxe é:

nome_do_array.push(valor)

Usando nosso array de exemplo,
poderíamos adicionar um novo elemento desta forma:
*/

alunos.push('Helena');
/*É possível, ainda, inserir múltiplos valores utilizando push:*/
alunos.push('Helena', 'Maria');

/*
Outras formas de adicionar elementos a um vetor
Como mencionado, há outras maneiras de adicionar
elementos a um array de forma dinâmica. 

A primeira delas pode ser vista a seguir:
*/
alunos[alunos.length] = 'Maria';

var alunos = ['Alex', 'Anna', 'João'];
alunos.splice(3,0,'Helena');
console.log(alunos); //imprimirá 'Alex', 'Anna', 'João', 'Helena'

var alunos = ['Alex', 'Anna', 'João'];
alunos.splice(1,1,'Helena');
Console.log(alunos); //subistituirá e imprimirá 'Alex, 'Helena', 'João'