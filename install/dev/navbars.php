<html>
<head>
    <link href="../css/prism.css" rel="stylesheet">
    <link href="../css/ghpages-materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<title>Установка Orlando CMS</title>
</head>
<body>
<? include('navbar.php');?>
<div class="row">
<div class="col s2">
<? include('navmenu.php');?>
</div>
<div class="col s10">
<h5 class="center-align"><a href="index.php?id=4">Вернуться к выбору меню</a></h5><br>
<div class="row">
 <div class="col s5">
Логотип слева:
   <nav class="cyan accent-1">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Лого</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Кнопка</a></li>
        <li><a href="badges.html">Кнопка</a></li>
      </ul>
    </div>
  </nav>
 </div>
 <div class="col s1"><br></div>
<div class="col s5">
Логотип справа:
  <nav class="light-green accent-1">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo right">Лого</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="sass.html">Кнопка</a></li>
        <li><a href="badges.html">Кнопка</a></li>
      </ul>
    </div>
  </nav>
 </div>
</div>

 <div class="row">
<div class="col s5">
Логотип по центру:
  <nav class="cyan accent-4">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center">Лого</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="sass.html">Кнопка</a></li>
        <li><a href="badges.html">Кнопка</a></li>
      </ul>
    </div>
  </nav>
 </div>
<div class="col s1"><br></div>
<div class="col s5">
Подсветка активной страницы**:
  <nav class="light-green accent-3">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo center">Лого</a>
      <ul class="left hide-on-med-and-down">
        <li><a href="sass.html">Кнопка</a></li>
        <li class="active"><a href="collapsible.html">Кнопка</a></li>
      </ul>
    </div>
  </nav>
**Потребует Вашей доработки кода.
 </div>
</div>

<div class="row">
<div class="col s5">
Выпадающий список:
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>
<nav class="light-blue accent-2">
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo">Logo</a>
    <ul class="right hide-on-med-and-down">
      <li><a href="sass.html">Sass</a></li>
      <li><a href="badges.html">Components</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>
</div>
<div class="col s1"><br></div>
<div class="col s5">
Иконки***:
<nav class="green darken-4">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo"><i class="material-icons">cloud</i>Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html"><i class="material-icons">search</i></a></li>
        <li><a href="badges.html"><i class="material-icons">view_module</i></a></li>
        <li><a href="collapsible.html"><i class="material-icons">refresh</i></a></li>
        <li><a href="mobile.html"><i class="material-icons">more_vert</i></a></li>
      </ul>
    </div>
  </nav>
***Все иконки только в стиле material
</div>
</div>

</div>
 </div>
<footer class="page-footer grey darken-3">
<div class="footer-copyright">
<a class="grey-text text-lighten-4 right" href="http://www.orlandonetworks.ru/contacts">© 2017 Orlandonetworks.ru</a>
</div>
</footer>            
</body>
</html>