
<h5 class="center-align">Теперь мы настроим базу данных SQL</h5><br>
  <div class="progress">
      <div class="determinate" style="width: 50%"></div>
  </div>
<h5>Введите следующие данные базы данных:</h5><br><br>
Название<br>
<form method="post" action="installstages/second.php">
<p><input type="text" placeholder="Название базы данных" name="dbname"></p>
Логин<br>
<p><input type="text" placeholder="Логин пользователя базы данных" name="dblogin"></p>
Пароль<br>
<p><input type="text" placeholder="Пароль пользователя базы данных" name="dbpassword"></p>
Префикс*<br>
<p><input type="text" value="oncms_" name="dbprefix"></p>
*Если Вы создаете первый сайт на этой базе данных при помощи Orlando CMS, то это значение не обязательно изменять.
<p><input class="btn waves-effect waves-light" type="submit" name="prev" value="Назад" />
<input class="btn waves-effect waves-light" type="submit" name="add" value="Далее" /></p>
<?php 
if(isset($_POST['add']))
{
    $_SESSION['dbname'] = $_POST['dbname'];
	$_SESSION['dblogin'] = $_POST['dblogin'];
	$_SESSION['dbpassword'] = $_POST['dbpassword'];
	$_SESSION['dbprefix'] = $_POST['dbprefix'];
	header('Location: ../index.php?id=3');
}
if (isset($_POST['prev'])){
	header('Location: ../index.php?id=1');
}
?>
</form>
