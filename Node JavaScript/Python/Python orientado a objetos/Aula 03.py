from datetime import  date
class Pessoa:
    def __init__(self, nome, idade):
        self.nome = nome
        self.idade = idade
# UM MÉTODO DE CLASSE PARA CRIAR
# um OBJETO PESSOA ATRAVÉS DO ANO DE NACIMENTO.
    @classmethod
    def apartirAnoNacimento(cls, nome, ano):
      return cls(nome, date.today().year - ano)
# MÉTODO ESTÁTICO: VERIFICAR SE É MAAIOR DE IDADE.
    @staticmethod
    def ehMaiorIdade(idade):
      return idade >= 18

pessoa1 = Pessoa('Maria', 26)
pessoa2 = Pessoa.apartirAnoNacimento('Ana', 2006)
print(pessoa1.idade)
print(pessoa2.idade)
#imprimir o resultado
print(Pessoa.ehMaiorIdade(17))