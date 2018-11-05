<?php

include_once 'connect.php';
$querySelect = $conn -> query("select * from personagem");

while ($registros           = $querySelect ->fetch_assoc()){
    $id_personagem          = $registros['id_personagem'];
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

    echo "<tr>";
    echo "<td>$id_personagem</td>";
    echo "<td>$name_personagem</td>";
    echo "<td>$class_personagem</td>";
    echo "<td>$level_personagem</td>";
    echo "<td><a href='edit.php?id=$id_personagem'><i class=\"far fa-edit\"></i></a></td>";
    echo "<td><a href='playing.php?id=$id_personagem'><i class=\"fas fa-dice-d20\" style='font-size: 25px'></i></a> </td>";
    echo "</tr>";
}
?>