<h5 class="center-align">Введите Ваш CMS-ключ</h5><br>
  <div class="progress">
      <div class="determinate" style="width: 75%"></div>
  </div>
Ваш индивидуальный ключ можно получить на сайте Dev.Orlandonetworks. Он служит для связи сайта с аккаунтом.<br>
Эти данные будут храниться на нашем сервере, чтобы Вы могли управлять Вашим сайтом с любого устройства.<br>
<div class="row">
<div class="col s2"></div>
<div class="col s8">
<form method="post" action="installstages/third.php"><br>
Ключ<br>
<p><input type="text" name="key"></p>

<p><input class="btn waves-effect waves-light" type="submit" name="prev" value="Назад" />
<input class="btn waves-effect waves-light" type="submit" name="add" value="Далее" /></p>
</form><br>
<a href="http://dev.orlandonetworks.ru/registration.php" target="_blank">У меня нет аккаунта Orlandonetworks</a>. (Откроется в
новой вкладке)
</div>
<div class="col s2"></div>
</div>
<?php
session_start();
if(isset($_POST['add']))
{
	$_SESSION['acckey'] = $_POST['key'];
	header('Location: ../index.php?id=31');
}
if (isset($_POST['prev'])){
	header('Location: ../index.php?id=2');
}
?>

