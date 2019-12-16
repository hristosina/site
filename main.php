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
<br><?php if ($_COOKIE['admin'] =='1'): ?><a style="color: #D5B45B" href="admin.php">На панель админа</a>.<?php endif; ?>

   <?php endif; ?></p>
</div>
<?php
  $host = 'localhost';  
  $user = 'root';    
  $pass = ''; 
  $db_name = 'site';   
  $link = mysqli_connect($host, $user, $pass, $db_name); 
  if (!$link) {
    echo 'Нет соединения с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
    exit;
  }
?>
<?php
  $sql = mysqli_query($link, 'SELECT `avtor`,`book`, `about`, `pic`,`file` FROM `books`');
  while ($result = mysqli_fetch_array($sql)): ?>
  <div style="clear:left; margin-left: auto; margin-right: auto; margin-top: 20px; margin-bottom: 20px; width: 900px; height:100%;  border: 3px solid #e8e8e8; padding: 8px; background-color: white">
<h1 style="clear:left;"><?php echo "{$result['avtor']},\"{$result['book']}\""; ?></h1>
<?php echo "<img style='float:left; margin: 5px 5px 30px 5px; width: 180px;' src=\"data:image/jpg;base64,".base64_encode($result['pic'])."\" />"; ?>
<?php echo "{$result['about']}"; ?>
<?php
   if($_COOKIE['user'] ==''):
   echo "";
   else:
   echo "<a download style='color: #D5B45B' href=\"data:text/fb2;base64,".base64_encode($result['file'])."\" />"; ?>Скачать</a>
 <?php endif; ?>
<br>
<br style="clear:left;"> 
</div>
<?php endwhile; ?>
</body>
</html>  

