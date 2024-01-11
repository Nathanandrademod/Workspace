#include <stdio.h>
#include <stdlib.h>
int main()
{
    int cont;
    float salario,media,soma,maior;
    maior=0; soma=0;
    for (cont=1;cont<=10;cont++)
    {
        printf ("Digite o salário do funcionário: \n");
        scanf("%f",&salario);
        soma=soma+salario;
        if (salario > maior)
        {
            maior=salario;
        }
    }
    media=soma/10;
    printf ("O maior salário da empresa e = %.2f \n",maior);
    printf ("A média salarial da empresa e = %.2f \n",media);
    return 0;
}