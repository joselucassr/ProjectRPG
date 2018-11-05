<?php

    $utf8 = header("Content-Type: text/html; charset=utf-8");
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $db_name = 'rpg';
    $conn = new mysqli($server, $user, $pass, $db_name);
    $conn -> set_charset('utf8');