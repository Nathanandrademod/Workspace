#estrategia 01

lista = [10, 2, 5, 7, 6, 3]
n=len(lista)
soma=0
for i in range(n):
    if(lista[i]%2==0):
        print(lista[i])
        soma=soma+lista[i]
print(f'O somatório dos elementos pares da lista é: {soma}')