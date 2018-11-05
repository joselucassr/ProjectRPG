<?php
include_once 'db/CRUD/connect.php';
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$_SESSION['id'] = $id;
$querySelect = $conn -> query("select * from personagem where id_personagem='$id'");

while ($registros           = $querySelect ->fetch_assoc()){
    $name_personagem        = $registros['name_personagem'];
    $class_personagem       = $registros['class_personagem'];
    $level_personagem       = $registros['level_personagem'];
    $background_personagem  = $registros['background_personagem'];
    $race_personagem        = $registros['race_personagem'];
    $alignment_personagem   = $registros['alignment_personagem'];
    $bonds_personagem       = $registros['bonds_personagem'];
    $exp_personagem         = $registros['exp_personagem'];
    $personality_personagem = $registros['personality_personagem'];
    $flaws_personagem       = $registros['flaws_personagem'];
    $ideals_personagem      = $registros['ideals_personagem'];
}
?>