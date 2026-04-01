<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "link_css.php";?>
    <title>Login</title>
    
</head>
<body>
<?php include("menu.php"); ?>    
<main>
               
        <h2>Recuperar a senha</h2>

        <form action="<?php $_SERVER["PHP_SELF"] ?>" method="get">
           
               
                    <label for="login">Insira o seu login</label>
                    <input type="text" name="login" id="login">
                
            <div class="btn-container">     
                <button type="submit">Recuperar Senha</button>
            </div>     
        </form>

         <?php
            if(isset ($_GET['login'])){
                   
                include("recupera_senha.php");

            }
         
         ?>
    </main>
<?php include_once "footer.php";?>    
</body>
</html>
