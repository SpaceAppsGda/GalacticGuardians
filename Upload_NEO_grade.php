<?php 

$Admin = mysql_connect("10.43.7.44" , "GG" , "starlord") or die (mysql_error());
mysql_select_db("user");
$tabla = mysql_query("SELECT * FROM UserName") or die (mysql_error());
if (isset($_COOKIE["user"])){
	mysql_query("INSERT INTO rating(UserName)
	VALUES (
	'{$_POST["user"]}')",
	$Admin);
}

?>	