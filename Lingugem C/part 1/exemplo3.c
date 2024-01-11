#include <stdio.h>
int main()
{
    int numero;
    printf("Entre com um número inteiro:\n");
    scanf("%d", &numero);
    printf("O valor informado pelo usuário foi %d\n", numero);
    return 0;
}

// No cotidiano do programador, além de exibir a escrita formatada na tela, é preciso ler os dados informados pelo usuário.
// Para isso, utilizam-se comandos de entrada, permitindo a leitura formatada,
// principalmente, a partir do teclado, como é o caso do scanf().

// A função scanf() permite que o valor informado pelo usuário seja armazenado em uma variável e,
// posteriormente, usado para diversos cálculos.
// Para chamar essa função, basta passar dois parâmetros entre os parênteses. Observe:

//É importante que você observe alguns detalhes:

// O formato de leitura se mantém igual ao da escrita na tela:

//%d para as variáveis do tipo int, %f para as do tipo float e %c para as do tipo char;
// Não vamos nos aprofundar, por enquanto, no porquê do uso do & antes do nome da variável.
// Saiba que não seguir essa recomendação pode causar consequências inesperadas;
// Não confunda o símbolo & (comercial) com o operador lógico &&;
// Não inclua o caractere especial ‘\n’ na string parâmetro da função scanf().