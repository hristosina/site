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
<form action="" method="post">
   <div>
    <h1>Поиск</h1>
    <p>Пожалуйста, введите имя автора или название книги для поиска.</p>
    <input type="text" placeholder="Введите имя автора или название книги" name="uname" required>
	<button type="submit">Поиск</button>
	 </div>
</form>
</body>
</html>  

