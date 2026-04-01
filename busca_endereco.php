<?php
    if(isset($_GET['produto_id'])){

    echo $_GET['produto_id'];
    }
            //buscar endereço do pedido

            $sql_endereco = mysqli_query($conexao, "SELECT 
            endereco,
            numero,
            bairro,
            cidade,
            cep
            FROM endereco_entrega
             WHERE produto_id = $produto_id
            ");
            
            
             while($end = mysqli_fetch_assoc($sql_endereco)){

                echo "<tr>";

                echo "<td>" . htmlspecialchars ($end["endereco"]). "</td>";
                echo "<td>" . htmlspecialchars ($end["numero"]). "</td>";
                echo "<td>" . htmlspecialchars ($end["bairro"]). "</td>";
                echo "<td>" . htmlspecialchars ($end["cidade"]). "</td>";
                echo "<td>" . htmlspecialchars ($end["cep"]). "</td>";
                echo "</tr>";
            }
?>            