<?php include("conexao.php")?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="<?php $_SERVER["PHP_SELF"] ?>" method="get">
           <select name="categoria" required>
            <option> Selecione uma categoria</option>
                <?php
                     $sql_categosria_bd = "SELECT distinct categoria FROM categoria";
                     $categoria_bd = mysqli_query($conexao,$sql_categosria_bd);
                     while($show_dados_bd = mysqli_fetch_array($categoria_bd)){
                     ?>
                          <option value="<?php echo $show_dados_bd['categoria']?>"><?php echo $show_dados_bd['categoria']?>
                    <?php
                    }
                ?>
           </select>  
           
           <button type="submit">Buscar categoria</button>
        </form>

       
         <?php 
                if(isset($_GET["categoria"]))
                {
                    
                    include("livros_db_secao.php");
                }                
            ?>
        <a href="livros_cadastrados.php">Livros cadastrados</a>|
        <a href="logout.php">sair</a>

        
    </main>
</body>
</html>
