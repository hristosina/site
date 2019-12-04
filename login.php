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
        <li><a href="main.html">Главная</a></li>
        <li><a href="" class="submenu-link">Категория</a>
          <ul class="submenu">
            <li><a href="">Понравилось пользователям</a></li>
            <li><a href="">Русская литература</a></li>
            <li><a href="">Зарубежная литература</a></li>
          </ul>
        </li>
        <li><a href="search.php">Поиск</a></li>
        <li><a href="login.php">Войти</a></li>
      </ul>
    </nav>
</header> 
<body>
<form action="action_page.php" method="post">
   <div>
    <h1>Войти</h1>
    <p>Пожалуйста, введите данные для входа.</p>
    <hr>
    <label for="uname"><b>Имя пользователя</b></label><br>
    <input type="text" placeholder="Введите имя пользователя" name="uname" required>

    <label for="psw"><b>Пароль</b></label>
    <input type="password" placeholder="Введите пароль" name="psw" required>

    <button type="submit">Войти</button>
   <span class="psw">Ещё не <a style="color: #D5B45B" href="reg.php">зарегистрированы?</a></span>
   </div>
</form>
</body>
</html>  
