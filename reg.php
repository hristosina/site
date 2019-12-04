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
<form action="action_page.php">
  <div>
    <h1>Зарегистрироваться</h1>
    <p>Пожалуйста, заполните поля для создания учетной записи.</p>
    <hr>
    <label for="name"><b>Имя пользователя</b></label>
    <input type="text" placeholder="Введите имя пользователя" name="name" required>
	
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Введите Email" name="email" required>

    <label for="psw"><b>Пароль</b></label>
    <input type="password" placeholder="Введите пароль" name="psw" required>

    <label for="psw-repeat"><b>Повторите пароль</b></label>
    <input type="password" placeholder="Повторите пароль" name="psw-repeat" required>
    <div class="clearfix">
      <button type="submit" class="signupbtn">Зарегистрироваться</button>
    </div>
  </div>
</form>
</body>
</html>  
