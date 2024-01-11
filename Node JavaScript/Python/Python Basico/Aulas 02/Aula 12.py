def eh_primo(n):
    if(n<2):
        return False  #retorna falso
    i=n//2
    while(i>1):
        if(n%i==0):
            return False #retorna falso
        i=i-1
    return True #retorna verdadeiro

def imprimir_resultado(numero, resultado):
  mensagem= f'O numero {numero} NÃO é primo'
  if(resultado):
     mensagem= f'O número {numero} é primo'
  return mensagem


numero = 7
resultado=eh_primo(numero)
msg=imprimir_resultado(numero, resultado)
print(msg)