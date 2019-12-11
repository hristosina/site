<!DOCTYPE html>
<html>
<head>
 <title>Библиотека</title>
 <meta charset="UTF-8">
 <link rel="stylesheet" href="style.css">
</head>
<header>
  <a href="" class="logo">Библиотека</a>
  <nav>
      <ul class="topmenu">
        <li><a href="main.php">Главная</a></li>
        <li><a href="catalog.php" class="submenu-link">Категория</a>
          <ul class="submenu">
            <li><a href="">Понравилось пользователям</a></li>
            <li><a href="">Русская литература</a></li>
            <li><a href="">Зарубежная литература</a></li>
          </ul>
        </li>
        <li><a href="search.php">Поиск</a></li>
        <li><?php if($_COOKIE['user'] ==''): ?><a href="login.php">Войти</a><?php else: ?><a href="exit.php">Выйти</a><?php endif; ?></p></li>
      </ul>
    </nav>
</header> 
<body>
<div style="margin-left: auto; margin-right: auto; margin-top: 15px; width: 900px;  border: 3px solid #e8e8e8; padding: 8px; background-color: white">
<h1>Добро пожаловать!</h1>
<hr>
<p>Вы попали на сайт электронной библиотеки художественной литературы. На данном ресурсе размещаются произведения как русских, так и зарубежных писателей. Приятного чтения!</p>
<?php
   if($_COOKIE['user'] ==''):
     ?>
<p><a href="login.php" style="color: #D5B45B">Войдите</a> или <a href="reg.php" style="color: #D5B45B">зарегистрируйтесь</a> для скачивания электронных изданий.</p>
<?php else: ?>
<p> Приветствуем Вас, <?=$_COOKIE['user']?>. Чтобы выйти, нажмите <a style="color: #D5B45B" href="exit.php">здесь</a>.

   <?php endif; ?></p>
</div>
</body>
</html>  

