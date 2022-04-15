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
        <form action="php/atoruzonion.php" method="post" class="formRegustr" id="formRegustr">
            <input class="formRegustrInput" type="text" name="login" placeholder="Логин" id="login">
            <input class="formRegustrInput" type="password" name="password" id="passwprd1" placeholder="Пароль" required>
            <p class="erorses" id="edr"></p>
            <button class="buttons">Авторизация</button>
        </form>
    </div>

</body>

</html>