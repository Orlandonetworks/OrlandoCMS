<?php session_start(); ?>
<h5 class="center-align">Сейчас мы настроим основные моменты Вашего сайта</h5><br>
  <div class="progress">
      <div class="determinate" style="width: 25%"></div>
  </div>
<h5>Как будет называться Ваш сайт?</h5><br>
<form method="post" action="installstages/first.php">
<p><input type="text" placeholder="Название" name="sitename"></p>
<p><input class="btn waves-effect waves-light" type="submit" name="prev" value="Назад" />
<input class="btn waves-effect waves-light" type="submit" name="add" value="Далее" /></p>
</form>
<?php 
if(isset($_POST['add']))
{
    $_SESSION['sitename'] = $_POST['sitename'];
	header('Location: ../index.php?id=2');
}
if (isset($_POST['prev'])){
	header('Location: ../index.php');
}
?>
