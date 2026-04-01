<?php
include("conexao.php");
if (session_status() == PHP_SESSION_NONE) { session_start(); }
$id = (int) $_SESSION['id_usuario'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<?php include "link_css.php"; ?>
<title>Meus Pedidos</title>
</head>
<body>
<?php include("menu.php"); ?>

<main>
<?php
if(isset($_GET["msg"])){
    echo '<p class="msg-sucesso">'.htmlspecialchars($_GET["msg"]).'</p>';
}
?>

<h1>Meus Pedidos</h1>

<div class="table-produto">
<table>
<thead>
<tr>
<th>Produto</th>
<th>Fornecedor</th>
<th>Categoria</th>
<th>Preço</th>
<th>Data do Pedido</th>
<th>Nº Pedido</th>
</tr>
</thead>
<tbody>
<?php
$sql = "
SELECT p.ticket_pedido_id,
DATE_FORMAT(p.data_pedido, '%Y-%m-%d') AS data_pedido, 
cp.produto, 
cp.fornecedor,
cp.preco,
c.categoria
FROM pedido p
INNER JOIN cad_produto cp ON p.produto_id = cp.produto_id
INNER JOIN categoria c ON cp.categoria_id = c.categoria_id
WHERE p.id_usuario = $id
ORDER BY p.data_pedido DESC
";
$resultados_db = mysqli_query($conexao, $sql);
if(!$resultados_db){ die("Erro SQL: " . mysqli_error($conexao)); }

if(mysqli_num_rows($resultados_db) > 0){
    while($dados = mysqli_fetch_assoc($resultados_db)){
        echo "<tr>";
        echo '<td><a href="detalhes_pedido.php?ticket_pedido_id=' . (int)$dados['ticket_pedido_id'] . '">' 
                . htmlspecialchars($dados['produto']) . 
             '</a></td>';
        echo "<td>" . htmlspecialchars($dados['fornecedor']) . "</td>";
        echo "<td>" . htmlspecialchars($dados['categoria']) . "</td>";
        echo "<td>R$ " . number_format($dados['preco'],2,',','.') . "</td>";
        echo "<td>" . date('d/m/Y', strtotime($dados['data_pedido'])) . "</td>";
        echo "<td>" . (int)$dados['ticket_pedido_id'] . "</td>";
        echo "</tr>";
    }
}else{
    echo "<tr><td colspan='6'>Nenhum pedido encontrado.</td></tr>";
}
?>
</tbody>
</table>
</div>

</main>
<?php include_once "footer.php"; ?>
</body>
</html>