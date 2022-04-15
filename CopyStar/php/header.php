<?php
session_start();
$rols = $_SESSION["rols"];
?>
<header>
    <div class="header-logo">
        <a>Copy Star</a>
    </div>
    <div class="header-centre">
        <a class="buttonss" href="/">Главная</a>
        <a class="buttonss" href="../us.php">О нас</a>
    </div>
    <div class="header-right">
        <?php
        if ($rols == "user") {


        ?>
            <a class="buttonss">корзина</a>
            <a class="buttonss" href="../php/exit.php">Выход</a>
        <?php
        } elseif ($rols == "admin") {


        ?>
            <a class="buttonss" href="../admin.php">админка</a>
            <a class="buttonss" href="../php/exit.php">Выход</a>
        <?php
        } else {
        ?>
            <a class="buttonss" href="../registration.php">Регистрация</a>
            <a class="buttonss" href="../atoruzonion.php">Авторизация</a>
        <?php
        }
        ?>

    </div>
</header>