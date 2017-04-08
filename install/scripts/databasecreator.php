<?php
session_start();

$db_name = $_SESSION['dbname'];
$db_login = $_SESSION['dblogin'];
$db_password = $_SESSION['dbpassword'];
$prefix = $_SESSION['dbprefix'];

//Первичное присоединение

$connection = mysql_connect("localhost", $db_login, $db_password);
$db = mysql_select_db($db_name);
mysql_set_charset("utf8");

if(!$connection || !$db)
{
    exit(mysql_error());
}

mysql_query("CREATE TABLE "$prefix"test
	test1 = varchar (15),
	test2 = year")
?>
