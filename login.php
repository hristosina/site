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
        <li><?php if($_COOKIE['user'] ==''): ?><a href="login.php">Войти</a><?php else: ?><a href="exit.php">Выйти</a><?php endif; ?></li>
      </ul>
    </nav>
</header> 
<body>
<form action="checkaut.php" method="post">
   <?php
   if($_COOKIE['user'] ==''):
     ?>
   <div>
    <h1>Войти</h1>
    <p>Пожалуйста, введите данные для входа.</p>
    <hr>
    <label for="email"><b>Логин</b></label>
    <input type="text" placeholder="Введите логин" name="email" required>
    <label for="password"><b>Пароль</b></label>
    <input type="password" placeholder="Введите пароль" name="password" required>
    <button type="submit">Войти</button> <p style="text-align: right">Ещё не <a style="color: #D5B45B" href="reg.php">зарегистрированы?</a></p>
	<?php else: ?>
	<p>Вы уже вошли.</p>
	<?php endif; ?></p>
    </div>
</form>
</body>
</html> 
