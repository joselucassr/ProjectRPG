<?php
    session_start();
    include_once '../connect.php';

    $name_personagem        = filter_input(INPUT_POST, 'name_personagem', FILTER_SANITIZE_SPECIAL_CHARS);
    $class_personagem       = filter_input(INPUT_POST, 'class_personagem', FILTER_SANITIZE_SPECIAL_CHARS);
    $level_personagem       = filter_input(INPUT_POST, 'level_personagem', FILTER_SANITIZE_NUMBER_INT);
    $background_personagem  = filter_input(INPUT_POST, 'background_personagem', FILTER_SANITIZE_SPECIAL_CHARS);
    $race_personagem        = filter_input(INPUT_POST, 'race_personagem', FILTER_SANITIZE_SPECIAL_CHARS);
    $alignment_personagem   = filter_input(INPUT_POST, 'alignment_personagem', FILTER_SANITIZE_SPECIAL_CHARS);
    $bonds_personagem       = filter_input(INPUT_POST, 'bonds_personagem', FILTER_SANITIZE_SPECIAL_CHARS);
    $exp_personagem         = filter_input(INPUT_POST, 'exp_personagem', FILTER_SANITIZE_NUMBER_INT);
    $personality_personagem = filter_input(INPUT_POST, 'personality_personagem', FILTER_SANITIZE_SPECIAL_CHARS);
    $flaws_personagem       = filter_input(INPUT_POST, 'flaws_personagem', FILTER_SANITIZE_SPECIAL_CHARS);
    $ideals_personagem      = filter_input(INPUT_POST, 'ideals_personagem', FILTER_SANITIZE_SPECIAL_CHARS);

    $sql = "INSERT INTO personagem (name_personagem, class_personagem, level_personagem, 
                                    background_personagem, race_personagem, alignment_personagem, bonds_personagem, exp_personagem, 
                                    personality_personagem, flaws_personagem, ideals_personagem) 
            VALUES ('$name_personagem', '$class_personagem', '$level_personagem', '$background_personagem', '$race_personagem', 
                    '$alignment_personagem', '$bonds_personagem', '$exp_personagem', '$personality_personagem', '$flaws_personagem', 
                    '$ideals_personagem'
                    )";
    $res = $conn -> query($sql);

    if ($res==true) {
        print "<br> <div class='alert alert-success'>Cadastro com sucesso!</div>";
    } else {
        print "<br> <div class='alert alert-danger'>Não foi possível cadastrar!</div>";
        echo mysqli_error($conn);
    }