

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "link_css.php";?>
    <title>Cadastrar Produto</title>
</head>
<body>
    <?php include("menu.php"); ?>
    
    <main>

    <?php 
                            

                            if(isset($_GET["msg"])){

                                echo $_GET["msg"];

                                header("location:tela_cad_endereco.php");
                            }
                ?> 
            
        <form action="cad_produto.php" method="post">
                <h2>Bem vindo ao Sistema de cadastro: Cadstre aqui o seu produto</h2>

                <label for="produto">Nome do produto</label>
                <input type="text" name="produto" id="produto">

                <label for="preco">Preço do produto</label>
                <input type="text" name="preco" id="preco">
               <p> 
                <br><label for="fornecedor">Nome do fornecedor</label>
                <input type="text" name="fornecedor" id="fornecedor">
               
                <label for="categoria">Nome da Categoria</label>
                <input type="text" name="categoria" id="categoria">
               </p>
               <p>
                 <div class="btn-container"> 
                    <button type="submit" name="btn-cadastrar">Cadastrar Produto</button>
                </div>
               </p>
              
        </form>
</main>
<?php include_once "footer.php";?>    
</body>
</html>
