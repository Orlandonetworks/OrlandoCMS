<h5 class="center-align">Оформление сайта: Навигация</h5>
Давайте выберем навигацию Вашего сайта. Ниже представлены шаблоны, выберите один из них.
<br>
  <div class="progress">
      <div class="determinate" style="width: 100%"></div>
  </div>
<form>
<div class="row">
<div class="col s3">
  <select class="browser-default">
    <option value="" disabled selected>Выберите вариант</option>
    <option value="1">Логотип слева</option>
    <option value="2">Логотип справа</option>
    <option value="3">Логотип по центру</option>
    <option value="4">Подсветка активной страницы**</option>
	<option value="4">Выпадающий список</option>
	<option value="5">Иконки</option>
	<option value="6">6</option>
	<option value="7">7</option>
  </select>
 </div>
<div class="col s3">
<br>
</div>
<div class="col s4">
  <select class="browser-default">
    <option value="" disabled selected>Выберите количество кнопок меню*</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
	<option value="4">4</option>
	<option value="5">5</option>
</select>
</form>
*Выпадающие списки будут настроены позже.
 </div> 
 </div>
<h5 class="center-align"><a href="dev/navbars.php" target="_blank">Просмотреть примеры</a></h5>

<form method="post" action="installstages/4.php">
<p><input class="btn waves-effect waves-light" type="submit" name="prev" value="Назад" />
<input class="waves-effect waves-light btn" type="submit" name="add" value="Далее" /></p>
<?php 
if(isset($_POST['add']))
{
	header('Location: ../index.php?id=5');
}
if (isset($_POST['prev'])){
	header('Location: ../index.php?id=3');
}
?>
</form>
