#!/usr/bin/env python3.7
import smtplib
import email

gmail_user = 'MailBotSanikdah@gmail.com'
gmail_password = 'M@ilB0tS@nikd@h'


sent_from = 'MailBotSanikdah@gmail.com'
to = 'michaelfgarofalo@gmail.com'
subject = 'Test'
body = 'Test. I hope it works. Pls reply if u recived the mail'

email_text = """\
From: %s
To: %s
Subject: %s

%s
""" % (sent_from, ", ".join(to), subject, body)

try:
    server_ssl = smtplib.SMTP_SSL('smtp.gmail.com', 465)
    server_ssl.ehlo()
    server_ssl.login(gmail_user, gmail_password)
    server_ssl.sendmail(sent_from, to, email_text)
    server_ssl.close()

    print ("Email sent!")
except: 
    print ("Something went wrong...")
