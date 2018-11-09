#!C:\Python27\python.exe
import cgi;
import cgitb;cgitb.enable()

print "Content-Type: text/html"
print "" #use this double quote print statement to add a blank line in the script
print "<b>Hello python</b>"
form = cgi.FieldStorage()
uname= form.getvalue("name")
upsw= form.getvalue("psw")



# if x==2:
# 	print ("teag")
# print("<h1>Welcome to GOLNG</h1>")
# print("<hr/>")
# print("<h2>Using input tags </h2>")

# form = cgi.FieldStorage()
# name= form.getvalue("name")
# email= form.getvalue("email")
# psw= form.getvalue("psw")

import MySQLdb
conn = MySQLdb.connect(host= "localhost",user="root",passwd="",db="lng")
cursor = conn.cursor()
sql = "SELECT count[*] as count from 'usersignup' where 'name' = "uname" and 'psw' = "upsw" "
cursor.execute(sql, (name, psw))
count = cursor.fetchone()

if (count['count'] > 0):
	print succcessffully
else :
	print fuck

# try:
#    x.execute("""INSERT INTO usersignup VALUES (%s,%s,%s)""",(name,email,psw))
#    conn.commit()
# except:
#    conn.rollback()

# conn.close()		 	
# print("<h1>Record inserted succcessffully</h1>")
