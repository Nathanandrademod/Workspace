#include <stdio.h>
int main (void)
{
	float nota;
	printf ("Digite a nota: ");
	scanf("%f", &nota);
	printf("%f\n",nota);
	if (nota >= 5)
		printf("Parabéns você foi aprovado\n");
	if (nota < 5)
		printf("Não deu desta vez, mas não desista!");
	return 0;
}

