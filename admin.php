<!DOCTYPE html>
<html>
<head>
 <title>Библиотека</title>
 <meta charset="UTF-8">
 <link rel="stylesheet" href="style.css">
</head>
<body>
<div style="margin-left: auto; margin-right: auto; margin-top: 15px; width: 500px; border: 3px solid #e8e8e8; padding: 8px; background-color: white;">
<?php
   if($_COOKIE['user'] ==''):
     ?>
<p>Доступ закрыт неавторизированным пользователям.<a href="login.php" style="color: #D5B45B">Войдите как админ</a>.</p>
<?php elseif ($_COOKIE['admin'] =='0'): ?>
<p>Вы не админ.</p>
<?php else: ?>
<h1>Добро пожаловать в панель админа.</h1>
<hr>
<h3>
<p>Вы можете:</p>
<ul>
<li><a href="add.php" style="color: #D5B45B">Добавить новую книгу</a></li>
<li><a href="delete.php" style="color: #D5B45B">Удалить книгу</a></li>
<li><a href="main.php" style="color: #D5B45B">На главную</a></li>
</ul>
</h3>
<?php endif; ?></p>
</div>
</body>
</html> 
