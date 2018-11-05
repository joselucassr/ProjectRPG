<?php
    session_start();
    include_once 'includes/head.php'
?>


<?php /*
include_once 'connect.php';
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$_SESSION['id'] = $id;
$querySelect = $conn -> query("select * from personagem where id_personagem='$id'");
*/
?>

    <!-- Formulário de Cadastro -->
    <div class="row col-12 mx-auto">
        <h5 class="mx-auto fontType text-center" style="padding-top: 25px; color: #fff;">Character</h5>
    </div>

    <div class="card col-md-10 col-sm-12 mx-auto">
        <div class="card-header col-12" style="background-color: #fff; width: 100%">
            <a id="headContainer">Characters</a>
        </div>
        <div class="card-body table-responsive" style="margin: 0; padding: 0">

            <div class="row col-12 text-center">
                <?php
                if (isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    session_unset();
                }
                ?>
            </div>

            <table class="table table-borderless  table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Class</th>
                    <th scope="col">Level</th>
                </tr>
                </thead>
                <tbody>
                <?php
                include_once 'db/CRUD/characters_read.php';
                ?>
                </tbody>
            </table>
            <div class="row col-12 text-center">
                <?php
                if (isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    session_unset();
                }
                ?>
            </div>
        </div>


    </div>


<?php include_once 'includes/foot.php' ?>