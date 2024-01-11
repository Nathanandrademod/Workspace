def multiplicador(numero):
    a = 2  # esta variável tem escopo local
    print(f"Dentro da função, a variável vale: {a}")
    return a * numero


a = 3  # esta variável tem escopo global
b = multiplicador(5)
print(f"Fora da função, a variável a vale: {a}")


def multiplicador(numero):
    return a * numero


a = 3  # esta variável tem escopo global
b = multiplicador(5)
print(f"A variável b vale: {b}")


