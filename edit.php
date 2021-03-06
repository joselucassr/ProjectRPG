<?php session_start(); include_once 'includes/head.php'?>

    <?php
        include_once 'includes/fetch_personagem.php'
    ?>

    <!-- Formulário de Cadastro -->
    <div class="row col-12 mx-auto">
        <h5 class="mx-auto fontType text-center" style="padding-top: 25px; color: #fff;">Character</h5>
    </div>

    <div class="card col-md-10 col-sm-12 mx-auto">
        <div class="card-header col-12" style="background-color: #fff; width: 100%">
            <a id="headContainer">Editing</a>
        </div>

            <div class="card-body" style="margin: 0; padding: 0">

                <form action="db/CRUD/character/update_character.php" method="post">
                    <div class="row mx-auto">
                        <div class="col-md-7 col-sm-12">
                            <!-- Character Name -->
                            <div class="form-row col-12">
                                <div class="form-group col-lg-8 col-md-12 mx-auto">
                                    <label for="name_personagem" class="fontType">Character Name</label>
                                    <input value="<?php echo $name_personagem?>" type="text" name="name_personagem" id="name_personagem" maxlength="255" required autofocus class="form-control">
                                </div>
                            </div>

                            <!-- Character Class -->
                            <div class="form-row col-12">
                                <div class="form-group col-lg-8 col-md-12 mx-auto">
                                    <label for="class_personagem" class="fontType">Class</label>
                                    <input value="<?php echo $class_personagem?>" type="text" name="class_personagem" id="class_personagem" maxlength="50" required class="form-control">
                                </div>
                            </div>

                            <!-- Character Level -->
                            <div class="form-row col-12">
                                <div class="form-group col-lg-8 col-md-12 mx-auto">
                                    <label for="level_personagem" class="fontType">Level</label>
                                    <input value="<?php echo $level_personagem?>" type="number" name="level_personagem" id="level_personagem" required class="form-control">
                                </div>
                            </div>

                            <!-- Character Background -->
                            <div class="form-row col-12">
                                <div class="form-group col-lg-8 col-md-12 mx-auto">
                                    <label for="background_personagem" class="fontType">Background</label>
                                    <input value="<?php echo $background_personagem?>" type="text" name="background_personagem" id="background_personagem" maxlength="100" required class="form-control">
                                </div>
                            </div>

                            <!-- Character Race -->
                            <div class="form-row col-12">
                                <div class="form-group col-lg-8 col-md-12 mx-auto">
                                    <label for="race_personagem" class="fontType">Race</label>
                                    <input value="<?php echo $race_personagem?>" type="text" name="race_personagem" id="race_personagem" maxlength="100" required class="form-control">
                                </div>
                            </div>

                            <!-- Character Alignment -->
                            <div class="form-row col-12">
                                <div class="form-group col-lg-8 col-md-12 mx-auto">
                                    <label for="alignment_personagem" class="fontType">Alignment</label>
                                    <input value="<?php echo $alignment_personagem?>" type="text" name="alignment_personagem" id="alignment_personagem" maxlength="100" required class="form-control">
                                </div>
                            </div>

                            <!-- Character Exp -->
                            <div class="form-row col-12">
                                <div class="form-group col-lg-8 col-md-12 mx-auto">
                                    <label for="exp_personagem" class="fontType">EXP</label>
                                    <input value="<?php echo $exp_personagem?>" type="number" name="exp_personagem" id="exp_personagem" required class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="col-md-5 col-sm-12">

                            <!-- Character Bonds -->
                            <div class="form-row col-12">
                                <div class="form-group col-12 mx-auto">
                                    <label for="bonds_personagem" class="fontType">Bonds</label>
                                    <textarea rows="5" name="bonds_personagem" id="bonds_personagem" class="form-control"><?php echo $bonds_personagem?></textarea>
                                </div>
                            </div>

                            <!-- Character Personality -->
                            <div class="form-row col-12">
                                <div class="form-group col-12 mx-auto">
                                    <label for="personality_personagem" class="fontType">Personality</label>
                                    <textarea rows="5" name="personality_personagem" id="personality_personagem" class="form-control"><?php echo $personality_personagem?></textarea>
                                </div>
                            </div>

                            <!-- Character Flaws -->
                            <div class="form-row col-12">
                                <div class="form-group col-12 mx-auto">
                                    <label for="flaws_personagem" class="fontType">Flaws</label>
                                    <textarea rows="5" name="flaws_personagem" id="flaws_personagem" class="form-control"><?php echo $flaws_personagem?></textarea>
                                </div>
                            </div>

                            <!-- Character Ideals -->
                            <div class="form-row col-12">
                                <div class="form-group col-12 mx-auto">
                                    <label for="ideals_personagem" class="fontType">Ideals</label>
                                    <textarea rows="5" name="ideals_personagem" id="ideals_personagem" class="form-control"><?php echo $ideals_personagem?></textarea>
                                </div>
                            </div>

                        </div>

                    </div>


                    <!-- Botão -->
                    <div class="row col-12 mx-auto">
                        <div class="form-group col-md-4 col-sm-12 mx-auto" style="padding-top: 20px;">
                            <input type="submit" value="SAVE" class="btn col-12 mx-auto" style="color: #fff ;background-color: #38B7B1;">
                        </div>
                    </div>
                </form>
            </div>


<?php include_once 'includes/foot.php'?>