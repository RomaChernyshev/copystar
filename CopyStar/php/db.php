<?php
session_start();
$link = new  mysqli("localhost", "root", "", "copystar");

if ($link->connect_errno) {
    echo "Ошибка в подклучение в db: $link->connect_error";
}
