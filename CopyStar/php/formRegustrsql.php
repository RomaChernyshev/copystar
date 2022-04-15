<?php
$name = $_POST["name"];
$surname = $_POST["surname"];
$patronymic = $_POST["patronymic"];
$login = $_POST["login"];
$Email = $_POST["Email"];
$password = $_POST["password"];

include 'db.php';
$querys = "INSERT INTO `users`(`name`, `surname`, `patronymic`, `login`, `email`, `password`) VALUES ('$name','$surname','$patronymic','$login','$Email','$password')";

$link->query($querys) or dir($link->error);
$link->close();
header("location:/");
