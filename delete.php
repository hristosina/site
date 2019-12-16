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

<div style="margin-left: auto; margin-right: auto; margin-top: 15px; width: 900px;  border: 3px solid #e8e8e8; padding: 8px; background-color: white">
	<h3><a href="admin.php" style="color: #D5B45B">Назад</a></h3>
    <h1>Удалить книгу</h1>
	 </div>
</form>
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
  endif;
?>
<?php
  $sql = mysqli_query($link, 'SELECT * FROM `books`');
  while ($result = mysqli_fetch_array($sql)): ?>
  <div style="clear:left; margin-left: auto; margin-right: auto; margin-top: 20px; margin-bottom: 20px; width: 900px; height:100%;  border: 3px solid #e8e8e8; padding: 8px; background-color: white">
<h1 style="clear:left;"><?php echo "{$result['avtor']},\"{$result['book']}\""; 
$id_im=$result['id'];
?></h1>
<?php echo "<img style='float:left; margin: 5px 5px 30px 5px; width: 180px;' src=\"data:image/jpg;base64,".base64_encode($result['pic'])."\" />"; ?>
<?php echo "{$result['about']}"; 
echo "<form style='margin-left: auto; margin-right: auto; margin-top: 15px; width: 500px; border:none; padding: none; background-color: none;' action='delet_im.php' method='post'>
<input type='hidden' name='img_del' value='";
echo $id_im;
echo "'/>
<button class='btn btn-success' type='submit'>Удалить</button>
</form>
<br style='clear:left;'> 
</div>";
?>
<?php endwhile; ?>
</body>
</html>  