$sql = "SELECT cad_produto.*, categoria.categoria 
        FROM cad_produto
        INNER JOIN categoria 
        ON cad_produto.categoria_id = categoria.categoria_id
        WHERE cad_produto.categoria_id = $categoria_id";

$resultados_db = mysqli_query($conexao, $sql);

while($dados = mysqli_fetch_assoc($resultados_db)){ ?>
    
    <ul>
        <li>Produto: <?php echo $dados["produto"] ?></li>
        <li>Fornecedor: <?php echo $dados["fornecedor"] ?></li>
        <li>Categoria: <?php echo $dados["categoria"] ?></li>
        <li>Preço: <?php echo $dados["preco"] ?></li>
    </ul> 

<?php } ?>

*/