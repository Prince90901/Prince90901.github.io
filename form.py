print("Content-type: text/html\n\n")
import cgi
import cgitb; cgitb.enable()
form = cgi.FieldStorage()
fname  = form['firstName']
with open('mail.txt', 'a') as k:
    k.write(f'{fname}')
print('your form has been submitted')