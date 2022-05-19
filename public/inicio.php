<?php

use Database\Database;

require_once "../src/model/Database.php";

$db = new Database();
//var_dump($db);
$db->insert(
    "INSERT INTO usuarios(nome, email, senha)
    VALUES ('Paulo Donini' , 'donini@eumesmo.com' , '1234'); "
);

?>

<?php require_once "../src/views/header.php"; ?>

    <div class="login-center">
        <h1>::: LOGIN :::</h1>
        <form method="post" action="receba.php">
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-12">
                        <input type="email" class="form-control" name="email" placeholder="Digite seu email" required />
                        <br>
                        <input type="password" class="form-control" name="pass" placeholder="Digite sua senha" required />
                        <br><br>
                    </div>
                </div>
                    <div class="row">
                        <input type="submit" value="Entrar" class="btn btn-primary col-sm-12 col-lg-5 offset-lg-1" />&nbsp;
                        <input type="reset" value="Limpar" class="btn btn-warning col-sm-12 col-lg-5" />
                        <br><br>
                        <a href="receba.php"> Entrar como visitante </a>
                    </div>
            </div>
        </form>
    </div>

<?php require_once "../src/views/footer.php"; ?>