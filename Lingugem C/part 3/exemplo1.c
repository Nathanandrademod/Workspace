#include <stdio.h>
int main (void)
{
    int opcao;
    printf("1 - Inserir novo cliente.\n");
    printf("2 - Consultar cliente por CFP.\n");
    printf("3 - Consultar cliente por nome.\n");
    printf("4 - remover cliente da base de clientes.\n");
    printf("Qualquer outra número para sair.\n");

    printf ("Digite a opção: ");
    scanf("%d", &opcao);
   
    switch (opcao) {
        case 1:
            printf("Vamos inserir um novo cliente?\n Digite seu nome:\n Digite seu CPF:\n");
            break;
        case 2:
            printf("Vamos consultar um cliente?\n Digite seu CPF:\n");
            break;
        case 3:
            printf("Vamos consultar um cliente?\n Digite seu Nome:\n");
            break;
        case 4:
            printf("Vamos remover um cliente?\n Digite seu CPF:\n");
            break;
        default:
            printf("Vamos sair do sistema?\n");
            break;
    }
    
}


/*
 Imagine que você deseja implementar um menu 
 
 para a escolha de uma operação em um sistema
 
 simples com interface textual. O menu terá as opções abaixo:

Inserir novo cliente
Consultar cliente por CPF
Consultar cliente por nome.
Remover cliente da base de clientes.
Qualquer outra tecla para sair do sistema.

*/