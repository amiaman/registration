<?php 
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("mypersonal") or die(mysql_error());
echo mysql_error();

?>