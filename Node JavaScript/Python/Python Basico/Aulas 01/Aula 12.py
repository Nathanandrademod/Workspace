#A função eval()
#A função eval() recebe uma string, mas trata como um valor numérico. Veja o exemplo:
s = '1+2'
print(type(s))
print(eval(s))
print('\n')

#Entrada de dados com a função Input(). Veja o exemplo:
nome = input('Entre com seu nome:')
print('Olá {}\n'.format(nome))


numero = eval(input('Entre com um numero inteiro: '))
somar = numero + 2
print(f'O seu numero {numero} mais 2 é = {somar}\n')

peso = eval(input('Entre com o seu pesso:  '))
altura = eval(input('Entre com sua altura: '))
imc = peso/(altura * altura)
print(imc)