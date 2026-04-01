<?php 

include('conexao.php');

session_start();

$id = $_SESSION['id_usuario'];

$produto = $_POST["produto"];
$fornecedor = $_POST["fornecedor"];
$categoria = $_POST["categoria"];
$preco = $_POST["preco"];

$msg = array();

if($produto != "" && $fornecedor != "" && $categoria != ""){

    // insere categoria se não existir
    $insere_categoria = "INSERT IGNORE INTO categoria(categoria) VALUES ('$categoria')";
    mysqli_query($conexao,$insere_categoria);

    // busca o id da categoria
    $sql_categoria = "SELECT categoria_id FROM categoria WHERE categoria = '$categoria'";
    $result_categoria = mysqli_query($conexao,$sql_categoria);
    $dados_categoria = mysqli_fetch_assoc($result_categoria);

    $categoria_id = $dados_categoria['categoria_id'];

    // cadastra produto
    $sql_cad_prod = "INSERT INTO cad_produto(id_usuario,produto,fornecedor,categoria_id,preco)
                     VALUES ('$id', '$produto','$fornecedor','$categoria_id','$preco')";

    if(mysqli_query($conexao,$sql_cad_prod)){

        $msg[] = "Cadastro realizado com sucesso";

        foreach($msg as $msg_cad){
            header("location:produtos_cadastrados.php?msg=$msg_cad");
        }
    }
}
?>