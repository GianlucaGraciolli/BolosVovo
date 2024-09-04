<?php 
require __DIR__ . "/../config/config.php";
require "./partials/header.php";
?>
<div>
    <span>user logado</span>
    <button type="button">sair</button>
    <a href="">Cadastrar</a>
</div>
</header>

    <main>
         <table>
            <tr>
                <th colspan="4">Lista de Bolos</th>
            </tr>
            <tr>
                <td>BOLO NAME</td>
                <td>BOLO PRICE</td>
                <td>BOLO DESCRIPTION</td>
                <td><a href="">editar</a> <a href="">excluir</a></td>
            </tr>
</table>
<?php
    require './partials/footer.php';
?>

