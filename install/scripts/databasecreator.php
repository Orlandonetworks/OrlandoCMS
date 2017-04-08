<?php
session_start();

//Получаем переменные из сессии, которые мы ввели раньше
$db_name = $_SESSION['dbname'];
$db_login = $_SESSION['dblogin'];
$db_password = $_SESSION['dbpassword'];
$prefix = $_SESSION['dbprefix'];


//Первичное присоединение

$connection = mysql_connect("localhost", $db_login, $db_password);
$db = mysql_select_db($db_name);
mysql_set_charset("utf8");

//Выдаем ошибку, если соединение неудачно
if(!$connection || !$db)
{
    exit(mysql_error());
}

//Создаем таблицы
mysql_query("CREATE TABLE users(id int  AUTO_INCREMENT, login varchar(32), key varchar(255), rules varchar(20), PRIMARY KEY (id_user) )") or die(mysql_error());
mysql_query("CREATE TABLE settings(id int)") or die(mysql_error());
mysql_query("CREATE TABLE tablename2(id int)") or die(mysql_error());
mysql_query("CREATE TABLE tablename3(id int)") or die(mysql_error());
mysql_query("CREATE TABLE tablename4(id int)") or die(mysql_error());
//Закроем соединение
mysql_close();

?>