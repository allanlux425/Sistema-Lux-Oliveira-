
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
<h1>Detalhe do Pedido</h1>

<div class="table-produto">
<table>
<thead>
<tr>
<th>Produto</th>
<th>Fornecedor</th>
<th>Categoria</th>
<th>Preço</th>
<th>Data</th>
<th>Nº Pedido</th>
</tr>
<!--
<p>
<tr>
<th>Endereço</th>
<th>Número</th>
<th>Bairro</th>
<th>Cidade</th>
<th>CEP</th>
</tr>
</p>
-->
</thead>

<tbody>
    <?php include ("busca.php");?>

</tbody>
</table>
<P>
 <table>
<thead>
<tr>
<th>Endereco</th>
<th>Numero</th>
<th>Bairro</th>
<th>Cidade</th>
<th>Cep</th>
</tr>
<tbody>
    <?php include ("busca_endereco.php");?>
</tbody>
</table>

</P>

</div>

</main>
<?php include_once "footer.php"; ?>
    


