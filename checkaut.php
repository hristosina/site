<?php
 $email = filter_var(trim($_POST['email']),
 FILTER_SANITIZE_STRING);
 $password = filter_var(trim($_POST['password']),
 FILTER_SANITIZE_STRING);
 $date = date("Y-m-d");
 
 $mysql = new mysqli('localhost','root','','site');
 
 $result = $mysql->query("SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'");
 $user = $result->fetch_assoc();
 error_reporting(0);
 if(count($user) == 0) {
	 echo "Неверно введёная почта и/или пароль!";
	 echo '<p><a href="login.php">'."Попробуйте снова".'</a></p>';
	 exit();
 } 
 if ($user['admin']=='1'){
 header('Location:admin.php'); }
if ($user['admin']=='0'){
 header('Location:main.php');}
 setcookie('user', $user['name'], time() + 28800, "/");
 setcookie('email', $user['email'], time() + 28800, "/");
 setcookie('admin', $user['admin'], time() + 28800, "/");
 $mysql->close();

?>