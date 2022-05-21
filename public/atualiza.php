<?php

use Database\Database;

 require_once "../src/views/header_nav.php"; ?>

<?php
    if( isset($_GET['cod']) ) {
        $cod = $_GET['cod'];
    } else {
        $cod = null;
    }

    require_once "../src/model/Database.php";
    $db = new Database();

    $resultDb = $db->select(
        "SELECT * FROM pedidos WHERE cod = $cod; "
    );

    //var_dump($resultDb);
?>

<form method="post" action="../src/model/update.php">
    <h2>Atualização do pedido</h2>

    <h4>Código:</h4>
    <input type="text" name="cod" value="<?= $resultDb[0]->cod ?>" readonly/>
    <br>
    
    <h4>Data e hora:</h4>
    <input type="text" name="data_hora" value="<?= $resultDb[0]->data_hora ?>" readonly/>
    <br>

    <h4>Itens:</h4>
    <input type="text" name="itens" value="<?= $resultDb[0]->itens ?>" />
    <br>

    <h4>Quantidade:</h4>
    <input type="number" name="quantidade" value="<?= $resultDb[0]->quantidade ?>" min="1" />
    <br>
    
    <h4>Pagamento:</h4>
    <div class="form-check form-check-inline">
        <input type="radio" class="form-check-input" name="pagamento" value="Dinheiro" <?= ($resultDb[0]->pagamento == "Dinheiro") ? "checked" : "" ?> /> Dinheiro
    </div>
    <div class="form-check form-check-inline">
        <input type="radio" class="form-check-input" name="pagamento" value="Pix" <?= ($resultDb[0]->pagamento == "Pix") ? "checked" : "" ?> /> Pix
    </div>
    <div class="form-check form-check-inline">
        <input type="radio" class="form-check-input" name="pagamento" value="Cartão" <?= ($resultDb[0]->pagamento == "Cartão") ? "checked" : "" ?> /> Cartão
    </div>
    <br>
    
    <h4>Entrega:</h4>
    <div class="row">
        <div class="col-lg-3 col-sm-5">
            <select name="local_entrega" class="form-select" required>
                <option value=" <?= $resultDb[0]->local_entrega ?> "> <?= $resultDb[0]->local_entrega ?> </option>
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
    <input type="submit" value="Atualizar pedido" class="btn btn-primary"/>
    <input type="reset" value="Reiniciar" class="btn btn-secondary"/>

</form>

<?php require_once "../src/views/footer.php"; ?>