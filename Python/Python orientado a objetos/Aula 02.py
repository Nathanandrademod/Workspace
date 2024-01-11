#Classe Salário
class Salarío:
    def __init__(self, base, bonus):
        self.base = base
        self.bonus = bonus

    def salario_anual(self):
        return (self.base*12)+self.bonus


#Classe Empregado
class Empregado:
    def __init__(self, nome, idade, salario):
      self.nome = nome
      self.idade = idade
      self.salario_agregado = salario #agregação
    def salario_total(self):
       return self.salario_agregado.salario_anual()

sa = float(input('Digite seu salário: '))
bo = float(input('Digite seu bonus: '))
salario = Salarío(sa, bo)
emp = Empregado('musashi', 46, salario)
print(emp.salario_total())