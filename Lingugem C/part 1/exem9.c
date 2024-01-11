#include <stdio.h>
void main()
{
    float altura, peso, imc;
    printf("Entre com a sua altura e o seu peso:\n");
    scanf("%f %f", &altura, &peso);
    imc = (peso / altura) / altura;
    printf("Seu IMC vale %f\n", imc);
}

// Parabéns! A alternativa C está correta.
// A impressão na tela de uma variável do tipo float é feita com 6 casas decimais.
// A entrada de dados é feita corretamente, "Seu IMC vale 23.148149"
// com as variáveis altura e peso armazenando os valores 1.80 e 75, respectivamente.

// O IMC é um cálculo simples que permite avaliar se a pessoa está
// dentro do peso que é considerado ideal para a sua altura.
// Também conhecido como Índice de Massa Corporal,
// o IMC é uma fórmula utilizada por vários profissionais de saúde,
// incluindo médicos, enfermeiros e nutricionistas, para saber,
// de uma forma rápida, se a pessoa precisa ganhar ou perder peso.