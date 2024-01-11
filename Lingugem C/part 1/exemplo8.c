#include <stdio.h>
void main(){
int a, b, c;
c = a - b;
printf("Entre com dois inteiros:\n");
scanf("%d %d", &a, &b);
printf("A diferença entre %d e %d vale %d\n", a, b, c);
}




// a variável c terá um balor aleatório.

//Parabéns! A alternativa D está correta.
//A atribuição c = a - b é feita antes que as variáveis a e b recebam os valores informados
//pelo usuário. Logo, não se sabe o valor delas.