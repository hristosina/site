<?php
$avtor = filter_var(trim($_POST['avtor']), FILTER_SANITIZE_STRING);
$book = filter_var(trim($_POST['book']), FILTER_SANITIZE_STRING);
$about = filter_var(trim($_POST['about']), FILTER_SANITIZE_STRING);
$cat = filter_var(trim($_POST['cat']), FILTER_SANITIZE_STRING);
$pic = addslashes(file_get_contents($_FILES['pic']['tmp_name']));
$file = addslashes(file_get_contents($_FILES['file']['tmp_name']));
$mysql = mysqli_connect("localhost", "root", "", "site");
$result = mysqli_query($mysql, "INSERT INTO `books` (`book`,`avtor`, `about`, `pic`,`file`, `cat`)
VALUES ( '$book','$avtor','$about', '$pic', '$file', '$cat')")
or die("Invalid query: " . mysqli_error());
mysqli_close($mysql);
header('Location: suc.php');
exit();
 ?>
 