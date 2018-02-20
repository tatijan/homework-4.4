<?php

mysql_connect("mysql.myhost.com", "user", "sesame") or die(mysql_error());
mysql_select_db("people") or die(mysql_error());

mysql_query("CREATE TABLE MyTable (
	  id INT AUTO_INCREMENT,
	  FirstName CHAR,
	  LastName CHAR,
	  Phone INT,
	  BirthDate DATE
	  PRIMARY KEY(id)
	)") Or die(mysql_error());
mysql_close ();
?>

