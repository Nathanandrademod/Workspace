var frutas = ['Laranja', 'Uva', 'Pera'];
      
/*Imprimindo na caixa de diálogo o conteúdo do array 'frutas' utilizando o laço 'for'*/
for(var i = 0; i < frutas.length; i++){
	console.log('Nome da Fruta contida no Array: ' + frutas[i]);
}
      
/*Imprimindo na caixa de diálogo o conteúdo do array 'frutas' utilizando o laço 'for/in'*/
for(var fruta in frutas){
	console.log('Nome da Fruta contida no Array: ' + frutas[fruta]);
}
console.log('hello');