// Código em Linguagem C - Comando DO WHILE

#include <stdio.h>
#include <stdlib.h>
int main()
{
    float salbruto, salliquido, imposto, totbruto=0, totliquido=0,totimposto=0;
    int contfunc=1;
    do
    {
        printf ("Digite o salário bruto: ");
        scanf("%f",&salbruto);
            if (salbruto >999)
            imposto = salbruto*0.10;
            else
                if (salbruto >1999)
                imposto = salbruto*0.15;
                else
                    if (salbruto >9999)
                    imposto = salbruto*0.20;
                    else
                        if (salbruto >99999)
                        imposto = salbruto*0.25;
                        else
                        imposto = salbruto*0.30;
                        salliquido = salbruto - imposto;
        printf ("Salário Liquido: %.2f \n",salliquido);
        totbruto = totbruto + salbruto;
        totliquido = totliquido + salliquido;
        totimposto = totimposto + imposto;
        contfunc++;
    } while (contfunc<=15);
    printf ("TOT salário bruto : %.2f \n",totbruto);
    printf ("TOT salário líquido : %.2f \n",totliquido);
    printf ("TOT imposto : %.2f \n",totimposto);
    return 0;
}





/* O COMANDO DO E DEPOIS VEM O WHILE :

O COMANDO DO VAI ESCREVER APENAS UMA VEZ O CODIGO
DEPOIS O COMANDO WHILE FAZ UM TESTE PARA VER SE A
CONDIÇÃO É VERDADEIRO SE FOR FALSA O COMANDO DO É 
EXECUTADO NOVAMENDO SE A CONDIÇÃO FOR VERDADEIRA 
O COMANDO WHILE TERMINA E SEGUE A LINHA DE BAIXO 
*/