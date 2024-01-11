#include <stdio.h>
int main ()
{
    float nota1, nota2,nota3,media;
    printf (" nota 1 = ");
    scanf("%f", &nota1);
    printf (" nota 2 = ");
    scanf("%f", &nota2);
    printf (" nota 3 = ");
    scanf("%f", &nota3);
    media=(nota1+nota2+nota3)/3;
    printf ("media= %1.f",media);
}
