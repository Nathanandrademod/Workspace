#Exercício 5 EXEMPLO 01
palavra = input('Entre com uma palavra: \n ')
while palavra != 'sair':
    palavra = input('Digite sair para encerrar o laço: \n')
print('Você digitou sair e agora está fora do laço')
print('\n')


#Exercício 6 EXEMPLO 02
while True:
    palavra = input('Entre com uma palavra: \n')
    palavra = input('Digite sair para encerrar o laço: \n')
    if palavra == 'sair':
        break
print('Você digitou sair e agora está fora do laço')

