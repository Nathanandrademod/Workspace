def encontrar_minimo(lista):
    minimo = lista[0]
    for elem in lista:
     if(elem < minimo):
         minimo = elem
         return minimo

lista_teste = [2,10,3,1,4,5]
menor = encontrar_minimo(lista_teste)
print('O menor elemento da lista é:[{}]\n\n'.format(menor))


def ehpar(n):
    r = (n%2==0)
    return r

def somarpar(lst):
    soma = 0
    for num in lst:
      if(ehpar(num)):
        soma=soma+num
    return soma

lista_teste2 = [2,4,3,5,7,8,12]
soma=somarpar(lista_teste2)
print(f'O somatório dos elementos pares da lista é: {soma}')