<?php
session_start();
$rols = $_SESSION["rols"];
if ($rols !== "admin") {
    header("location: /");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div>
        <?php include "php/header.php" ?>

    </div>

</body>

</html>