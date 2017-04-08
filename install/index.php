<!doctype HTML>
<html>
<head>
    <link href="css/prism.css" rel="stylesheet">
    <link href="css/ghpages-materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<title>Установка Orlando CMS</title>
</head>
<body>
<? include('dev/navbar.php');?>
<div class="row">
<div class="col s2">
<? include('dev/navmenu.php');?>
</div>
<div class="col s10">
<?php
$GLOBALS['installstage'] = $_GET['id'];
if ($GLOBALS['installstage'] == 1){
	echo readfile("installstages/first.php");	
} elseif($GLOBALS['installstage'] == 2)
{
	echo readfile("installstages/second.php");
}

elseif($GLOBALS['installstage'] == 3){
	echo readfile("installstages/third.php");
}

elseif($GLOBALS['installstage'] == 31){
	echo readfile("scripts/accountchecker.php");
}

elseif($GLOBALS['installstage'] == 4){
	echo readfile("installstages/databaseinstaller.php");
}

elseif($GLOBALS['installstage'] == 5){
	echo readfile("installstages/5.php");
}

else {
	echo readfile("installstages/introduction.php");
}
?>
 </div>
 </div>
<footer class="page-footer grey darken-3">
<div class="footer-copyright">
<a class="grey-text text-lighten-4 right" href="http://www.orlandonetworks.ru/contacts">© 2017 Orlandonetworks.ru</a>
</div>
</footer>            
</body>
</html>