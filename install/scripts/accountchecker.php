<h5 class="center-align">Сейчас мы проверим Ваш CMS-ключ</h5><br>
  <div class="progress">
      <div class="determinate" style="width: 75%"></div>
  </div>
<div class="row">
<div class="col s2"></div>
<div class="col s8">

<?php session_start();?>
Проверьте данные пользователя и напишите ключ ответа ниже. Имя Вашего сайта было отправлено в нашу
базу данных.<br>
Связка ключ-ключ ответа необходима, чтобы проверить, что это именно Ваш аккаунт.<br><br>
^BETA^<br>
Идут доработки кода, введите http://localhost/cmsportal/scripts/cms/accountchecker.php?key=ВАШ_КЛЮЧ&sitename=ИМЯ_САЙТА 
в адресную строку браузера.<br>
<form method="post" action="scripts/accountchecker.php"><br>
Ключ ответа<br>
<p><input type="text" name="anskey"></p>
<p><input class="btn waves-effect waves-light" type="submit" name="add" value="Далее" /></p>
</form>

<?php
if(isset($_POST['add']))
{
	$_SESSION['anskey'] = $_POST['anskey'];
	header('Location: ../index.php?id=4');
}
?>

</div>
<div class="col s2"></div>
</div>



