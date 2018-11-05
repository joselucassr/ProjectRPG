<?php
session_start();
include_once '../connect.php';

$name_player = filter_input(INPUT_POST, 'name_player', FILTER_SANITIZE_SPECIAL_CHARS);
$email_player = filter_input(INPUT_POST, 'email_player', FILTER_VALIDATE_EMAIL);
$pass_player = filter_input(INPUT_POST, 'pass_player', FILTER_SANITIZE_SPECIAL_CHARS);


$sql = "INSERT INTO player (name_player, email_player, pass_player) VALUES ('$name_player', '$email_player', '$pass_player')";
$res = $conn -> query($sql);

if ($res==true) {
    print "<br> <div class='alert alert-success'>Cadastro com sucesso!</div>";
} else {
    print "<br> <div class='alert alert-danger'>Não foi possível cadastrar!</div>";
    echo mysqli_error($conn);
}