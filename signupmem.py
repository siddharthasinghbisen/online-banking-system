#!C:\Python27\python.exe
import cgi;
import cgitb;cgitb.enable()

print "Content-Type: text/html"
print "" #use this double quote print statement to add a blank line in the script
print "<b>Hello user</b>"

print("<h1>Welcome to GOLNG</h1>")
print("<hr/>")


def submit():

	form = cgi.FieldStorage()
	name= form.getvalue("name")
	cname= form.getvalue("cname")
	email= form.getvalue("email")
	psw= form.getvalue("psw")

	import MySQLdb
	conn = MySQLdb.connect(host= "localhost",
	                  user="root",
	                  passwd="",
	                  db="lng")
	x = conn.cursor()

	try:
	   x.execute("""INSERT INTO memsignup VALUES (%s,%s,%s,%s)""",(name,cname,email,psw))
	   conn.commit()
	except:
	   conn.rollback()

	conn.close()	

	
	
submit()