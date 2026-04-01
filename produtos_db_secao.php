<?php
include ("conexao.php");
// produtos_db_secao.php
$categoria_id = $_GET['categoria_id'] ?? null; // pega o valor da URL
if($categoria_id){
    
    $sql_produtos = "SELECT cad_produto.*, categoria.categoria
                     FROM cad_produto
                     INNER JOIN categoria 
                     ON cad_produto.categoria_id = categoria.categoria_id
                     WHERE cad_produto.categoria_id = $categoria_id";

    $resultado_produtos = mysqli_query($conexao, $sql_produtos);

    echo "<ul>";
    while($produto = mysqli_fetch_assoc($resultado_produtos)){
        //var_dump($produto['produto_id']);
        $produto_id = (int)$produto['produto_id'];
        echo "<li>Produto: {$produto['produto']} </li>
            <li> Categoria: {$produto['categoria']}</li>
            <li> Preco: {$produto['preco']}</li>
            <li> Fornecedor: {$produto['fornecedor']}</li>";
        echo "<p>
        <a href='registrar_pedido.php?produto_id=$produto_id'>Fazer Pedido</a>
      </p>";
    }
    
    echo "</ul>";
}
?>
