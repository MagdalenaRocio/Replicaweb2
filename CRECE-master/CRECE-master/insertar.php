<?php
$EMAIL = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$sql = "insert into login (EMAIL,PASSWORD) VALUES ('$EMAIL','$password')";
include 'conexion.php';
mysqli_query($link,$sql);


?>
