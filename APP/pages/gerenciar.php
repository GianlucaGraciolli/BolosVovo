<?php
require __DIR__ .'/partials/header.php';
?>
</header>
<main>
<form action="" method="POST">
    <div class="form-item">
        <input type="submit" name="btn-action" value="Buscar">
        <input type="text" name="boloBuscado" id="bolo-buscado">
    </div>
    <div class="form-item">
        <label for="nome-bolo">Nome do bolo:</label>
        <input type="text" name="nomebolo" id="nome-bolo">
    </div>
    <div class="form-item">
        <label for="valor-bolo">Valor R$:</label>
        <input type="text" name="valorbolo" id="valor-bolo">
    </div>
    <div class="form-item">
        <label for="descricao-bolo">Descrição:</label>
        <textarea name="descricaobolo" id="descricao" cols="45" rows="10"></textarea>
    </div>
    <div>
        <input type="submit" name="btn=action" value="Excluir">
        <input type="submit" name="btn-action" value="Alterar">
    </div>
</form>

<?php
require __DIR__.'/partials/footer.php';
?>