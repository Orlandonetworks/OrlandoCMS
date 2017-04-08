<?php session_start(); ?>
<h5 class="center-align">Мы производим настройку Вашей базы данных...</h5><br>
  <div class="progress">
      <div class="determinate" style="width: 25%"></div>
  </div>
<h5>Подождите несколько мгновений</h5><br>

<form method="post" action="installstages/first.php">
<p><input class="btn waves-effect waves-light" type="submit" name="prev" value="Назад" />
<input class="btn waves-effect waves-light" type="submit" name="add" value="Далее" /></p>
</form>

<?php 
include('../scripts/databasecreator.php')
if(isset($_POST['add']))
{
	header('Location: ../index.php?id=3');
}
if (isset($_POST['prev'])){
	header('Location: ../index.php?id=5');
}
?>