<?php
include "db.php";
if (!empty($_POST)) {
    $login = $_POST["login"];
    $qerti = "SELECT * FROM `users` WHERE  `login`='$login'";
    $res = $link->query($qerti);

    if ($res->num_rows > 0) {
        $respos = ['status' => 'erors'];
    } else {
        $respos = ['status' => 'ok'];
    }

    echo json_encode($respos);
}
