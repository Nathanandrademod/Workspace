#include <stdio.h>
#include <stdlib.h>
int main()
{
    char letra;
    int conta = 0, conte = 0, conti = 0, conto = 0, contu = 0;
    printf("\nDigite uma letra minúscula (a..z) a cada linha e tecle ENTER para que \n \nmostre quantas vezes cada vogal (a, e, i, o, u) apareceu na lista. \n \npara fechar o programa digite . e depois ENTER NOVAMENTE : \n");
    scanf("%c", &letra);
    while (letra != '.')   //EM QUANTO A CONDIÇÃO NAO FOR . QUE TA DEPOIS DA VARIAVEL ELE EXECUTA  O QUE ESTA EM BAIXO
    {
        switch (letra)
        {
        case 'a':
            conta++;
            break;
        case 'e':
            conte++;
            break;
        case 'i':
            conti++;
            break;
        case 'o':
            conto++;
            break;
        case 'u':
            contu++;
            break;
        }
        scanf("%c", &letra);
    }
    printf("Total de a: %d \n", conta);
    printf("Total de a: %d \n", conte);
    printf("Total de a: %d \n", conti);
    printf("Total de a: %d \n", conto);
    printf("Total de a: %d \n", contu);
    return 0;
}