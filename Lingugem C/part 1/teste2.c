#include <stdio.h>
int main()
{
    float a,b;
    a = 12.5;
    b = 20.5;
    printf("A VARIAVEL a é = %.1f  E A VARIAVEL b É =  %.1f  \n", a, b);
        b = a + b ;
    printf("A soma das duas variaveis é igual á : %f", b );

     
      return 0;
}

// Repare que a variável do tipo float é armazenada com seis casas decimais.
// Para reduzir esse número, utiliza-se %.1f,
//%.2f, entre outros. O número entre “.” e “f” indica as casas decimais exibidas.
//É importante lembrar que o conteúdo da variável permanece inalterado,
// visto que a mudança afeta apenas a forma como será feita a escrita na tela. Vamos fazer um teste!
// No exemplo anterior, caso alterássemos a última linha para:"