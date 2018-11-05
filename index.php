<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf8">
        <title>Projeto RPG</title>

        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">

    </head>
    <body>
        <form action="db/CRUD/player/create_player.php" method="post">
            <!-- Player Name -->
            <div class="form-row col-12">
                <div class="form-group col-8 mx-auto" style="padding-top: 20px;">
                    <label for="name_player" class="navbar-brand">Player Name</label>
                    <input type="text" name="name_player" id="name_player" maxlength="255" required autofocus class="form-control">
                </div>
            </div>

            <!-- Player Email -->
            <div class="form-row col-12">
                <div class="form-group col-8 mx-auto" style="padding-top: 20px;">
                    <label for="email_player" class="navbar-brand">Email</label>
                    <input type="email" name="email_player" id="email_player" maxlength="255" required autofocus class="form-control">
                </div>
            </div>

            <!-- Player Password -->
            <div class="form-row col-12">
                <div class="form-group col-8 mx-auto" style="padding-top: 20px;">
                    <label for="pass_player" class="navbar-brand">Password</label>
                    <input type="password" name="pass_player" id="pass_player" maxlength="255" required autofocus class="form-control">
                </div>
            </div>

            <!-- Botão -->
            <div class="row col-6 mx-auto">
                <div class="form-group col-3 mx-auto text-left" style="padding-top: 20px;">
                    <input type="submit" value="cadastrar" class="btn btn-primary">
                </div>
            </div>
        </form>

<?php include_once 'includes/foot.php'?>