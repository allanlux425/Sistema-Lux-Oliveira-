<?php
session_start(); // garante que a sessão está ativa
include("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<?php include "link_css.php"; ?>
<title>Produtos cadastrados</title>
</head>

<body>

<?php include("menu.php"); ?>

<main>
<?php
    if(isset($_GET["msg"])){
        echo $_GET["msg"];
        }
?>
<h1>Meus Produtos Cadastrados</h1>
<div class="table-produto">
<table>

<thead>
<tr>
<th>Produto</th>
<th>Fornecedor</th>
<th>Categoria</th>
<th>Preço</th>

</tr>

<?php

$sql = "SELECT cad_produto.*, categoria.categoria
FROM cad_produto
INNER JOIN categoria
ON cad_produto.categoria_id = categoria.categoria_id
Where cad_produto.id_usuario = $id";

$resultados_db = mysqli_query($conexao, $sql);

while($dados = mysqli_fetch_assoc($resultados_db)){
?>

</thead>
<tbody>
<tr>
<td><?= $dados['produto']; ?></td>
<td><?= $dados['fornecedor']; ?></td>
<td><?= $dados['categoria']; ?></td>
<td><?= $dados['preco']; ?></td>
</tr>

<?php } ?>

</tbody>

</table>
</div>
</main>

<?php include_once "footer.php"; ?>

</body>
</html>