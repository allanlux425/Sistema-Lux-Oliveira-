<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "link_css.php";?>
    <title>Cadastrar Emdereço do produto: </title>
</head>
<body>
    <?php include("menu.php"); ?>
    
    <main>

    <?php 
           
            $produto_id = "";
             if(isset($_GET["produto_id"]) ?? null){

                               $produto_id = $_GET["produto_id"];
                            }

    ?> 
            
        <form action="cad_endereco_pedido.php" method="post">
            <input type="hidden" name="produto_id" value= "<?php echo $produto_id;  ?> ">
                <h2>Agora vamos cadstrar o enderço de envio do produto</h2>

                <label for="Endereço">Endereço</label>
                <input type="text" name="endereco" id="endereco">

                <label for="Número">Número</label>
                <input type="text" name="numero" id="numero">
               <p> 
                <br><label for="Bairro">Bairro</label>
                <input type="text" name="bairro" id="bairro">
               
                <label for="Cidade">Cidade</label>
                <input type="text" name="cidade" id="cidade">

                <label for="CEP">CEP</label>
                <input type="text" name="cep" id="cep">

               </p>
               <p>
                 <div class="btn-container"> 
                    <button type="submit" name="btn-cadastrar">Cadastrar Endereço de entrega</button>
                </div>
               </p>
              
        </form>
</main>
<?php include_once "footer.php";?>    
</body>
</html>
