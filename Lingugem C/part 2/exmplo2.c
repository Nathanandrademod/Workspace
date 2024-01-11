#include <stdio.h>
int main(){
    int cadastrado, ativo, logado;
    char opcao;

    cadastrado = ativo = logado = 0;

    printf("Deseja cadastra sua conta ? S/N :");
    scanf(" %c", &opcao);

    if (opcao == 'S')
    {
        cadastrado = 1;
        printf("\nConta cadastrada.\n");
    }

    printf("Deseja ativar sua conta ? S/N :");
    scanf(" %c", &opcao);

    if (opcao == 'S')
    {
        ativo = 1;
        printf("\nConta ativada.\n");

        printf("Deseja logar com sua conta ? S/N :");
        scanf(" %c", &opcao);

        if (opcao == 'S')
        {
            logado = 1;
            printf("\nConta Logada.\n");
        }
        
         //exemplo do && a baixo :

        //if ((cadastrado == 1) && (ativo == 1) && (logado == 1))
        
        //exemplo do || a baixo :
         
         
         if ((cadastrado == 1) && ((ativo == 1) || (logado == 1)))
        {
            printf("\nSejabem vindo.\n");
        }


    
        else

       {
            printf("\nAlgo deu errado. \n");
        }
    }
}
    //    tabela verdade considerado tambem por (v)verdadeiro (f)falso
    //     "o - é falso e o,  + vira verdadeiro"

    //    o siguinificado do && é :

    //    ++ = +
    //    +- = -
    //    -+ = -
    //    - - = -

    //    e o siguinificado de  || é:

    //    ++=+
    //    +- = +
    //    -+ = +
    //    -- = -
