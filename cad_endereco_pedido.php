<?php
include('conexao.php');
session_start();

$id = $_SESSION['id_usuario'];

// Dados do formulário
$endereco = $_POST["endereco"];
$numero = $_POST["numero"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$cep = $_POST["cep"];
$produto_id = (int) $_POST["produto_id"];

// Verifica se os campos obrigatórios foram preenchidos
if($endereco != "" && $numero != "" && $bairro != "" && $cidade != "" && $cep != ""){

    // 1️⃣ Inserir endereço
    $sql_endereco = "INSERT INTO endereco_entrega (endereco, numero, bairro, cidade, cep, id_user, produto_id) 
                     VALUES ('$endereco','$numero','$bairro','$cidade','$cep','$id','$produto_id')";
    
    if(mysqli_query($conexao, $sql_endereco)){

        // Pega o ID do endereço que acabou de ser inserido
        $endereco_id = mysqli_insert_id($conexao);

        // 2️⃣ Inserir pedido
        $sql_pedido = "INSERT INTO pedido (id_usuario, produto_id, data_pedido) 
                       VALUES ('$id', '$produto_id', NOW())";

        if(mysqli_query($conexao, $sql_pedido)){

            // Pega o ticket_pedido_id real
            $ticket_pedido_id = mysqli_insert_id($conexao);

            // 3️⃣ Inserir entrega
            $sql_entrega = "INSERT INTO entrega (ticket_pedido_id, produto_id, id_endereco)
                            VALUES ('$ticket_pedido_id', '$produto_id', '$endereco_id')";

            if(mysqli_query($conexao, $sql_entrega)){
                // Sucesso
                $msg = "Pedido realizado com sucesso";
                header("Location: meus_pedidos.php?msg=" . urlencode($msg) . "&produto_id=" . $produto_id);
                exit;
            } else {
                echo "Erro ao cadastrar entrega: " . mysqli_error($conexao);
            }

        } else {
            echo "Erro ao cadastrar pedido: " . mysqli_error($conexao);
        }

    } else {
        echo "Erro ao cadastrar endereço: " . mysqli_error($conexao);
    }

} else {
    echo "Preencha todos os campos obrigatórios!";
}
?>