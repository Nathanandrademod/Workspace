#include <stdio.h>
int main(){


int num;

printf ("Digite um número: ");

scanf("%d",&num);


while (num!=0)
{
    printf ("O número lido foi = %d\n\n ",num);
    printf ("Digite um número: ");
    scanf("%d",&num);
}

}


/* EXPLICAÇÃO :

EM QUANTO O NUMERO NÃO FOR 0 ELE NÃO FINALIZA O CODIGO CHAMADO DE "WHILE" 
DA PRA ALTERAR O NUMERO 0 PARA QUALQUER UM 


 */