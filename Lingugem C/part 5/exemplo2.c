#include <stdio.h>
#include <stdlib.h>
int main()
{
    float cont,num,M;
M = 0;
    printf("Digite 15 numeros : \n");

for (cont=1;cont<=3;cont++)

{
printf("NUMERO : ");
scanf("%f", &num);
if (num > M)
{
M=num;

}
}
printf("O NUMERO MAIOR É : %f", M);


    return 0;
}



/* codigo tipo int para scanf é %d e flooat é para %f  "podem variar
dependendo do codigo" */
