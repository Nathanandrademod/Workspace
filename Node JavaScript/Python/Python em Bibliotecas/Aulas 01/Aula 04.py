#Módulo SMTPLIB

#import dos pacotes necessários
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText
import smtplib

#criação de um objeto de mensagem
msg = MIMEMultipart()
texto = "Estou enviando um email com Python e tenha um ótimo dia" \
        " espero que seu dia seja glorioso !"


#parâmetros
senha = "ezrkwxomjmxhlzmr"
msg['From'] = "nat1234han@gmail.com"
msg['To'] = "nataliamodanesi@gmail.com"
msg['Subject'] = "Eu sou foda no python"

#criação do corpo da mensagem
msg.attach(MIMEText(texto, 'plain'))

#criação do servidor
server = smtplib.SMTP('smtp.gmail.com: 587')
server.starttls()

#Login na conta para envio
server.login(msg['From'], senha)

#envio da mensagem
server.sendmail(msg['From'], msg['To'], msg.as_string())