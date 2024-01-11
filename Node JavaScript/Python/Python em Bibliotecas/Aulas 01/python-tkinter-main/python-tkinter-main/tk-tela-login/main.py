from tkinter import *
import time

import pyautogui as pyautogui

master = Tk()
master.title("Portal de alunos 2023'")
master.geometry("720x600+610+153")
master.iconbitmap(default="icones\\ico.ico")
master.resizable(width=1, height=1)
master.configure(bg='dark blue')


# Funções
def nova_janela():
    master.destroy()
    time.sleep(0.3)
    master1 = Tk()
    master1.title("Nova Janela criada!!")
    master1.geometry("490x560+400+153")


# Variáveis globais
esconda_senha = StringVar()


# Importar imagens
img_fundo = PhotoImage(file="imagens\\fundo.png",)
img_botao = PhotoImage(file="imagens\\bt-img.png")

# Criação de labels
lab_fundo = Label(master,width=1, height=1, image=img_fundo,)
lab_fundo.pack()

# criação de redirencionamento de janelas



# Criação de caixas de entrada
en_token = Entry(master=lab_fundo, bd=2, font=("Calibri", 15), justify=CENTER)
en_token.place(width=392, height=45, x=49, y=138)

en_email = Entry(master=lab_fundo, bd=2, font=("Calibri", 15), justify=CENTER, width=40 )
en_email.place(width=392, height=45, x=49, y=244)

en_senha = Entry(master=lab_fundo, textvariable=esconda_senha, show="*", bd=2, font=("Calibri", 15), justify=CENTER)
en_senha.place(width=392, height=45, x=49, y=355)


# Criação de botões
bt_entrar = Button(master=lab_fundo, bd=0, image=img_botao, command=nova_janela)
bt_entrar.place(width=118, height=64, x=186, y=448)



master.mainloop()

