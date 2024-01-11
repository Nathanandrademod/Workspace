//Linguagem C - Com o comando FOR

#include <stdio.h>
#include <stdlib.h>
int main()
{
    float nota1,nota2,nota3,media;
    int contalunos;
    for (contalunos=1;contalunos<=40;contalunos++)
    {
        printf("Entre com a nota 1 do aluno: ");
        scanf("%f",&nota1);
        printf("Entre com a nota 2 do aluno: ");
        scanf("%f",&nota2);
        printf("Entre com a nota 3 do aluno: ");
        scanf("%f",&nota3);
        media=(nota1+nota2+nota3)/3;
        if (media>=7)
        printf("APROVADO com média %.2f \n\n",media);
        else
        printf("REPROVADO com média %.2f \n\n",media);
    }
    return 0;
}




/* codigo tipo int para scanf é %d e flooat é para %f  "podem variar
dependendo do codigo" */
