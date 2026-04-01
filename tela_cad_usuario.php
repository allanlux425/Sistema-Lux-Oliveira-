<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "link_css.php";?>
    <title>Cadatrar Usuário</title>
</head>
<body>


    <?php 
    session_start();
    include("menu.php"); ?>
    <main>
    <?php 
                            

                            if(isset($_GET["msg"])){

                                echo $_GET["msg"];
                            }
                ?>       

        <form action="cad_usuario.php" method="get">
            <h2>Cadastra-se no sistema de entregas</h2>
        <label for="nome">Nome do Usuário</label>
        <input type="text" name="nome" id="nome">
        <label for="senha">senha</label>
        <input type="password" name="senha" id="senha">
        <label for="login">Login</label>
        <input type="text" name="login" id="login">
       <p>  <label for="login">E-mail</label>
            <input type="text" name="email" id="email">
       </p> 
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