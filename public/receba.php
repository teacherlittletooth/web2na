<?php

use Database\Database;

    if( isset($_POST['email']) ) {
        $email = $_POST['email'];
    } else {
        $email = null;
    }
      
    if( isset($_POST['pass']) ) {
        $pass = $_POST['pass'];
    } else {
        $pass = null;
    }

/////////////////////////////////////////////////////////////////////
require_once "../src/model/Database.php";
$db = new Database();

$resultDb = $db->select(
    "SELECT * FROM usuarios WHERE email = '$email'; "
);

//var_dump($resultDb);

if( isset($resultDb[0]) ) {
    $emailDb = $resultDb[0]->email;
    $senhaDb = $resultDb[0]->senha;
} else {
    $emailDb = null;
    $senhaDb = null;
}
/////////////////////////////////////////////////////////////////////

    //Só verificaremos o email e a senha caso não sejam nulos
    if($email != null && $pass != null) {
        if($email == $emailDb && $pass == $senhaDb) {
            $msg = 'Bem vindo!';
            //$redirect = "<meta http-equiv='refresh' content='3; url=https://qi.edu.br'/>";
        } else {
            $msg = 'Acesso negado!';
            $redirect = "<meta http-equiv='refresh' content='3; url=../index.php'/>";
        }
    }

require_once "../src/views/header_nav.php";
?>

<div class="container mt-3">

    <div class="text-center text-primary">
        <h1><?php echo isset($msg) ? $msg : "Visitante" ?></h1>
        <?= isset($redirect) ? $redirect : "<hr>" ?>
    </div>

        <form method="get" action="pedido.php">
            <h3> Itens: </h3>
            <div class="form-check form-switch">
                <input type="checkbox" class="form-check-input" name="ingrediente[]" value="Pão com gergelim"/> Pão com gergelim <br>
                <input type="checkbox" class="form-check-input" name="ingrediente[]" value="Hamburguer"/> Hamburguer <br>
                <input type="checkbox" class="form-check-input" name="ingrediente[]" value="Alface"/> Alface <br>
                <input type="checkbox" class="form-check-input" name="ingrediente[]" value="Queijo"/> Queijo <br>
                <input type="checkbox" class="form-check-input" name="ingrediente[]" value="Molho especial"/> Molho especial <br>
                <input type="checkbox" class="form-check-input" name="ingrediente[]" value="Cebola"/> Cebola <br>
                <input type="checkbox" class="form-check-input" name="ingrediente[]" value="Picles"/> Picles <br>
            </div>

                <br><h3> Quantidade: </h3>
                <div class="row">
                    <div class="col-lg-2 col-sm-4">
                        <input type="number" class="form-control" name="qtde" value="1" min="1"/>
                    </div>
                </div>

                <br><h3> Pagamento: </h3>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="pgto" value="Dinheiro" checked/> Dinheiro
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="pgto" value="Pix" /> Pix
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="pgto" value="Cartão" /> Cartão
                </div>

                <br><br><h3> Entrega: </h3>
                <div class="row">
                    <div class="col-lg-3 col-sm-5">
                        <select name="entrega" class="form-select" required>
                            <option value="">Selecione...</option>
                            <option value="Alvorada">Alvorada</option>
                            <option value="Viamão">Viamão</option>
                            <option value="Porto Alegre">Porto Alegre</option>
                            <option value="Gravataí">Gravataí</option>
                            <option value="Cachoeirinha">Cachoeirinha</option>
                            <option value="Canoas">Canoas</option>
                        </select>
                    </div>
                </div>

                <br><br>

                <div class="row">
                    <input type="submit" class="col-lg-4 offset-lg-2 btn btn-primary" value="Enviar dados"/>
                    &nbsp;
                    <input type="reset" class="col-lg-4 btn btn-secondary" value="Limpar"/>
                </div>

            </form>

</div>

<?php require_once "../src/views/footer.php"; ?>