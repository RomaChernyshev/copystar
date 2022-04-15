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
        <form action="php/formRegustrsql.php" method="post" class="formRegustr" id="formRegustr">
            <input class="formRegustrInput" type="text" name="name" id="" placeholder="Имя" required>
            <input class="formRegustrInput" type="text" name="surname" placeholder="Фамилия" required>
            <input class="formRegustrInput" type="text" name="patronymic" placeholder="Отчество">
            <input class="formRegustrInput" type="text" name="login" placeholder="Логин" id="login">
            <input class="formRegustrInput" type="email" name="Email" id="" placeholder="Email" required>
            <input class="formRegustrInput" type="password" step="200" min="6" name="password" id="passwprd1" placeholder="Пароль" required>
            <input class="formRegustrInput" type="password" name="" id="passwprd2" placeholder="Повторите Пароль" required>
            <p><input class="formRegustrInput" type="checkbox" name="rules" id="checked">Обработка данных</p>
            <p class="erorses" id="edr"></p>
            <button class="buttons">Зарегистрироваца</button>
        </form>
    </div>

</body>
<script src="js/registr.js"></script>

</html>