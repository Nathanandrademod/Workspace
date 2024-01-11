media = 8.5
if(media>=7.0):
    situacao = "aprovado"
elif(media>=5.0):
    situacao = "em recuperação"
else:
    situacao = "reprovado"

print(f'O estudante está: {situacao}')
