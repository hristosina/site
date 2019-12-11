<?php
  $email = filter_var(trim($_POST['email']),
  FILTER_SANITIZE_STRING);
  $name = filter_var(trim($_POST['name']),
  FILTER_SANITIZE_STRING);
  $password = filter_var(trim($_POST['password']),
  FILTER_SANITIZE_STRING);
  $confpass = filter_var(trim($_POST['confpass']),
  FILTER_SANITIZE_STRING);
if ($_POST["name"] != NULL &&
 strlen($_POST["name"]) >= 6 &&
 preg_match("!^[a-zA-Z][a-zA-Z0-9_]*$!", $_POST["name"]))
{ echo ""; }
else
{ echo "Некорректное имя пользователя";
echo '<p><a style="color: #D5B45B" href="reg.php">'."Попробуйте снова".'</a></p>';
 exit(); }
if ($_POST["password"] != NULL && 
 strlen($_POST["password"]) >= 8 &&
 preg_match("![\%\$\#\@\&\*\^\|\\\/\~\[\]\{\}]!", $_POST["password"]) &&
 preg_match("![a-z]!", $_POST["password"]) && 
 preg_match("![A-Z]!", $_POST["password"]) && 
 preg_match("![0-9]!", $_POST["password"]))
{ echo ""; }
else
{ echo "Некорректный пароль";
echo '<p><a style="color: #D5B45B" href="reg.php">'."Попробуйте снова".'</a></p>';
 exit(); }
if (preg_match("![0-9a-z-]+@[a-z]+[.][a-z]!", $_POST["email"])) 
{ echo ""; }if (preg_match("![0-9a-z-]+@[a-z]+[.][a-z]!", $_POST["email"])) 
{ echo ""; }
else 
{ echo "Некорректный Email"; 
echo '<p><a style="color: #D5B45B" href="reg.php">'."Попробуйте снова".'</a></p>';
exit(); }
  if ($password!=$confpass) {
	echo "Пароли не совпадают!";
	echo '<p><a style="color: #D5B45B" href="reg.php">'."Попробуйте снова".'</a></p>';
    exit();
  }
   $mysql = new mysqli('localhost','root','','site');
  $query ="SELECT `email` FROM `users`";
  $result = mysqli_query($mysql, $query); 
  if($result)
   $rows = "";
    while($rows = $result->fetch_assoc()){
	if ($email==$rows["email"]) {
	  echo "На данную почту уже зарегистрирован аккаунт!";
	  echo '<p><a style="color: #D5B45B" href="reg.php">'."Попробуйте снова".'</a></p>';
	  exit();
	}
	}
    mysqli_free_result($result);
    mysqli_close($mysql);
 $mysql = new mysqli('localhost','root','','site');
 $mysql->query("INSERT INTO `users` (`email`,`name`,`password`,`admin`)
 VALUES('$email', '$name', '$password', '$admin')"); 
 
 $mysql->close();
 header('Location: success.php');
 exit();
?>