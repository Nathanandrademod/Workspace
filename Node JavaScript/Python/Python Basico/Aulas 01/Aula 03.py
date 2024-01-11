# ATRIBUIÇÃO MÚLTIPLA
a, b = 1, 2
print('Antes da troca')
print(f"O valor das variáveis: a={a}, b={b}")
#PRIMEIRA TROCA
temp = a
a = b
b = temp
print('Primeira troca')
print(f"O valor das variáveis: a={a}, b={b}")
#SEGUNDA TROCA
a, b = b, a
print('Segunda troca')
print(f"O valor das variáves: a={a}, b={b}")
