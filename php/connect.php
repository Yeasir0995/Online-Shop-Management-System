<?php
$hostname="localhost:3306"; 
$username="root";  
$password="";       
$database="user";  
$con=mysql_connect($hostname,$username,$password,$database);
if(! $con)
{
die('Connection Failed'.mysql_error());
}

mysql_select_db($database,$con);


?>