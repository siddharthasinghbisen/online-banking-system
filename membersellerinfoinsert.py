#!C:\Python27\python.exe
import cgi;
import cgitb;cgitb.enable()

print "Content-Type: text/html"
print "" #use this double quote print statement to add a blank line in the script
print "<b>Hello user</b>"

print("<h1>Your Data is inserted! </h1>")
print("<hr/>")
print("<h1>THANK YOU. </h1>")

def submit():

	form = cgi.FieldStorage()
	
	urcname= form.getvalue("urcname")
	quantity= form.getvalue("quantity")
	investment= form.getvalue("investment")
	cname= form.getvalue("cname")
	amntinvested= form.getvalue("amntinvested")
	years= form.getvalue("years")




	import MySQLdb
	conn = MySQLdb.connect(host= "localhost",
	                  user="root",
	                  passwd="",
	                  db="lng")
	x = conn.cursor()

	try:
	   x.execute("""INSERT INTO membersellerinfo VALUES (%s,%s,%s,%s,%s,%s)""",(urcname,quantity,investment,cname,amntinvested,years))
	   conn.commit()
	except:
	   conn.rollback()

	conn.close()	

	
	
submit()