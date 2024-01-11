#Módulo time

def regressiva(x):
   if x <= 0:
    print("FODA-SE")
   else:
      print(x)
      import time
      time.sleep(1)
      regressiva(x-1)


contagem = 10
print(regressiva(contagem))