
<?php
require __DIR__ . "/../config/config.php";
require "./partials/header.php";

?>
<a href="">Área Administrativa</a>
    </header>

    <main>
<?php        

$sql = $pdo->query("SELECT * FROM Bolo");
$sql->execute();

if ($sql->rowCount() > 0) {

    $dados = $sql->fetchAll(PDO::FETCH_ASSOC);


    foreach ($dados as $key => $value): ?>
        <div class="modal">
            <div>
                <img src="" alt="imagem do bolo de tananan">
            </div>
            <div class="modal-info-bolo">
                <span>Nome do Bolo: <?php echo $value['nomeBolo'] ?></span>
                <span>Valor do bolo: <?php echo $value['precoBolo'] ?></span>
                <span>Descrição do Bolo: <?php echo $value['descricaoBolo'] ?></span>
            </div>
        </div>
<?php endforeach;
} else {
}
?>

<?php
require'./partials/footer.php';
?>