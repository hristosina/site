<!DOCTYPE html>
<html>
<head>
 <title>Библиотека</title>
 <meta charset="UTF-8">
 <link rel="stylesheet" href="style.css">
</head>
<header>
  <a href="main.php" class="logo">Библиотека</a>
  <nav>
      <ul class="topmenu">
        <li><a href="main.php">Главная</a></li>
        <li><a href="catalog.php" class="submenu-link">Категория</a>
          <ul class="submenu">
            <li><a href="rus.php">Русская литература</a></li>
            <li><a href="zar.php">Зарубежная литература</a></li>
          </ul>
        </li>
        <li><a href="reg.php">Регистрация</a></li>
        <li><a href="login.php">Войти</a></li>
      </ul>
    </nav>
</header> 
<body>
<form action="check.php" method="post">
  <div>
    <h1>Зарегистрироваться</h1>
    <p>Пожалуйста, заполните поля для создания учетной записи.</p>
    <hr>
    <label for="name"><b>Имя пользователя</b></label>
    <input type="text" placeholder="Введите имя пользователя" name="name" required>
	<p style="font-style:italic; color:grey">Имя пользователя должно начинаться с буквы латинского алфавита, содержать только символы латинского алфавита, цифры и знак "_", содержать не меньше 6 символов.</p>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Введите Email" name="email" required>
    <label for="password"><b>Пароль</b></label>
    <input type="password" placeholder="Введите пароль" name="password" required>
<p style="font-style:italic; color:grey">Пароль должен содержать хотя бы 1 строчную и заглавную буквы латинского алфавита, цифру и один из знаков пунктуации или один из символов: %, $, #, @, &, *, ^, |, \, /, ~, [, ], {, };содержать не меньше 8 символов
</p>
    <label for="confpass"><b>Повторите пароль</b></label>
    <input type="password" placeholder="Повторите пароль" name="confpass" required>
    <div class="clearfix">
      <button type="submit" class="signupbtn">Зарегистрироваться</button><p style="text-align: right">Уже есть аккаунт? <a style="color: #D5B45B" href="login.php">Войти.</a></p>
    </div>
  </div>
</form>
</body>
</html>  
