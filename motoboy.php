<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "link_css.php";?>
    <title>Cadatrar Entregador Parceiro</title>
</head>
<body>


    <?php 
    session_start();
    include("menu.php"); ?>
    <main>
    <?php 
      // $produto_id = $_GET['produto_id'];                   

                if(isset($_GET['msg'])){
                    
                    
                        echo $_GET['msg'] . "<br>";
                    }
    ?>       

        <form action="cad_entregador.php" method="get">
            <input type="hidden" name="produto_id" value="<?php echo $produto_id; ?>" />
            <h2>Cadastre o entregador Parceiro que entregará o pedido</h2>
        <label for="nome">Nome do entregador</label>
        <input type="text" name="nome" id="nome">
        <div class="btn-container"> 
          <button type="submit" name="btn-cadastro">Cadastrar</button>
        </div>  
    </form>
    <?php if(isset($_SESSION['id_usuario']))
   
    ?>

    </main>
<?php include_once "footer.php";?>        
</body>
</html>