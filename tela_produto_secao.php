<?php
include("conexao.php");
session_start();
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
    <h1>Selecione a Categoria</h1>

    <!-- 2️⃣ Formulário sempre visível -->
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <select name="categoria_id" required>
            <option value="">Selecione uma categoria</option>
            <?php 
            $sql_categoria_bd = "SELECT * FROM categoria";
            $categoria_bd = mysqli_query($conexao, $sql_categoria_bd);
            while($show_dados_bd = mysqli_fetch_assoc($categoria_bd)){ ?>
                <option value="<?= $show_dados_bd['categoria_id']; ?>"><?= $show_dados_bd['categoria']; ?>
                </option>
            <?php } ?>
        </select>

        <div class="btn-container">     
            <button type="submit">Buscar Categoria</button>
        </div>
    </form>
    <?php
        if(isset($_GET['categoria_id']))
            include ("produtos_db_secao.php"); 
     ?>
</main>
<?php include_once "footer.php"; ?>
</body>
</html>