<!DOCTYPE html>
<html>
<head>
 <title>Библиотека</title>
 <meta charset="UTF-8">
 <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
   if($_COOKIE['user'] ==''):
     ?>
<p>Доступ закрыт неавторизированным пользователям.<a href="login.php" style="color: #D5B45B">Войдите как админ</a>.</p>
<?php elseif ($_COOKIE['admin'] =='0'): ?>
<p>Вы не админ.</p>
<?php else: ?>

<form action="newbook.php" method="post" enctype="multipart/form-data">
<h3><a href="admin.php" style="color: #D5B45B">Назад</a></h3>
<h1>Добавить новую книгу</h1>
<hr>
<label for="book"><b>Название</b></label>
<input type="text" placeholder="Введите название книги" name="book" required>
<label for="avtor"><b>Автор</b></label>
<input type="text" placeholder="Введите автора книги" name="avtor" required>
<label for="about"><b>Описание</b></label>
<input type="text" placeholder="Введите описание книги" name="about" required>
<label for="pic"><b>Обложка</b></label>
<br><input type="file" name="pic">
<br><label for="file"><b>Документ для скачивания</b></label>
<br><input type="file" name="file">
<br><label for="cat"><b>Категория</b></label>
<br><select name="cat" placeholder="Выберите категорию">
<option >Русская литература</option>
<option >Зарубежная литература</option>
</select>
<button type="submit">Добавить</button>
</form>
<?php endif; ?></p>
</body>
</html> 