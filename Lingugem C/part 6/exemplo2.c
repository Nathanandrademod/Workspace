// Código em Linguagem C - Com o comando WHILE

#include <stdio.h>
#include <stdlib.h>
int main()
{
    float nota1,nota2,nota3,media;
    int contalunos=1;
    while (contalunos<=6)
    {
        printf("Entre com a nota 1 do aluno: \n");
        scanf("%f",&nota1);
        printf("Entre com a nota 2 do aluno: \n");
        scanf("%f",&nota2);
        printf("Entre com a nota 3 do aluno: \n");
        scanf("%f",&nota3);
        media=(nota1+nota2+nota3)/3;
        if (media>=7)
        printf("APROVADO com média %.2f \n\n",media);
        else
            printf("REPROVADO com média %.2f \n\n",media);
        contalunos++;
    }
    return 0;
}



/* codigo tipo int para scanf é %d e flooat é para %f  "podem variar
dependendo do codigo" */
