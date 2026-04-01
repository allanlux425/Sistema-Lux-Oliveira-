<?php
include("conexao.php");
session_start();

// 1️⃣ Redirecionamento se o form foi enviado
if(isset($_GET['link']) && $_GET['link']==1 
   && isset($_GET['btn-submit']) 
   && !empty($_GET['categoria_id'])) {

    $categoria_selecionada = $_GET['categoria_id'];
    header("Location: tela_entrega_produto.php?sesao=$categoria_selecionada");
    exit(); // importante para parar a execução
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <?php include "link_css.php"; ?>
    <title>Seleção de Categoria</title>
</head>
<body>
<?php include("menu.php"); ?>  

<main>
<?php 
// 2️⃣ Mostra o formulário apenas se o link existir
if(isset($_GET['link']) && $_GET['link']==1){ 
?>
    <h1>Selecione a Categoria</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>?link=1" method="get">
        <select name="categoria_id" required>
            <option value="">Selecione uma categoria</option>
            <?php 
                $sql_categoria_bd = "SELECT * FROM categoria";
                $categoria_bd = mysqli_query($conexao, $sql_categoria_bd);
                while($show_dados_bd = mysqli_fetch_assoc($categoria_bd)){ ?>
                    <option value="<?= $show_dados_bd['categoria_id']; ?>">
                        <?= $show_dados_bd['categoria']; ?>
                    </option>
            <?php } ?>
        </select>

        <div class="btn-container">     
            <button type="submit" name="btn-submit">Busca Categoria</button>
        </div>
    </form>

<?php } else { ?>
    <p>Clique em "Cadastrar Entrega" para selecionar uma categoria.</p>
<?php } ?>
</main>

<?php include_once "footer.php"; ?>    
</body>
</html>