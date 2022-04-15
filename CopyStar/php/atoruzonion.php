<?php
session_start();
include "db.php";

$login = $_POST["login"];
$password = $_POST["password"];
$qerti = "SELECT * FROM `users` WHERE  `login`='$login' AND `password`='$password' ";
if ($result = $link->query($qerti)) {
    foreach ($result as $row) {
        $_SESSION["user"] = $row["id"];
        $_SESSION["rols"] = $row["rols"];
    }
}
header("location: /");
