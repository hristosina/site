<?php
$id= $_POST['img_del'];
$mysql = mysqli_connect("localhost", "root", "", "site");
$sql = mysqli_query($mysql, "DELETE FROM `books` WHERE `id` = '$id'")
or die("Invalid query: " . mysqli_error());
header("Location: /suc.php");
exit();

?>