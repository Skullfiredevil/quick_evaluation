<?php

if (loggedIn()) {
    header('Location: /');
    return;
}

$title = "Login Page";
$slot = file_get_contents( __DIR__ . '/html/login.html');

require __DIR__ . '/base.php';