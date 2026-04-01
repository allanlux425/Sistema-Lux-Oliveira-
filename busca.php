    <?php

    include("conexao.php");

    if(isset($_GET['ticket_pedido_id'])){

        $ticket_pedido_id = (int) $_GET['ticket_pedido_id'];

        $produto_id = "";




        $busca_cad = mysqli_query($conexao, "SELECT 
            p.ticket_pedido_id,
            DATE_FORMAT(p.data_pedido, '%Y-%m-%d') AS data_pedido, 
            cp.produto, 
            cp.fornecedor,
            cp.preco,
            cp.produto_id,
            c.categoria
            FROM pedido p
            INNER JOIN cad_produto cp ON p.produto_id = cp.produto_id
            INNER JOIN categoria c ON cp.categoria_id = c.categoria_id
            WHERE p.ticket_pedido_id = $ticket_pedido_id
            ORDER BY p.data_pedido DESC
        ");

        if(!$busca_cad){
            die("Erro SQL: " . mysqli_error($conexao));
        }

        if(mysqli_num_rows($busca_cad) > 0){

            while($dados = mysqli_fetch_assoc($busca_cad)){
               $produto_id = $dados['produto_id']; 
                echo "<tr>";

                
                echo"<td><center>". htmlspecialchars($dados['produto']) . "</center></td>";
                echo "<td>" . htmlspecialchars($dados['fornecedor']) . "</td>";
                echo "<td><center>" . htmlspecialchars($dados['categoria']) . "</center></td>";
                echo "<td><center>R$ " . number_format($dados['preco'],2,',','.') . "</center></td>";
                echo "<td><center>" . date('d/m/Y', strtotime($dados['data_pedido'])) . "</center></td>";
                echo "<td><center>" . (int)$dados['ticket_pedido_id'] . "</center></td>";
                echo "</tr>";

                echo "<tr>";

            }
        }else{
            echo "<tr><td colspan='6'>Nenhum pedido encontrado.</td></tr>";
        }
    }

    ?>