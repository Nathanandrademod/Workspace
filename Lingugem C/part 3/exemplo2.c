#include <stdio.h>
int main () {
int a;
scanf("%d", &a);

const char* resultado = 
  (a<0)?

  ((a%2==0)?"\n NEGATIVO par":"\n NEGATIVO IMPAR")

  : ((a%2==0)?"\n POSITIVO par":"\n POSITIVO impar");

printf(resultado);


}


/*

explicação com minhas palavras :

basicamente o que o codigo faz é 
pegar o numero digitado e dividir por 2
se o reultado for maior que 0 ele escreve
na tela " POSITIVO par" ou "POSITIVO impar" 


agora se foi dividido por 2 e o resultado 
for menor que 0 ele vai escrever na tela 
"NEGATIVO par" ou "NEGATIVO IMPAR" 

dica de observação :

veja que o codigo no começo esta o seguinte:

 (a<0)? 


*/