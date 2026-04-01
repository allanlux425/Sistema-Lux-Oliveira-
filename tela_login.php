<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "link_css.php";?>
    <title>Login</title>
    
</head>
<body>
<?php include("menu.php");?>
<main>
                <?php 
                            

                            if(isset($_GET["msg"])){

                                echo $_GET["msg"];
                            }
                ?>       

         
        <h2>Bem vindo ao Sistema de entregas</h2>
       
        <form action="login.php" method="post">

            <label for="login">Insira o seu login</label>
            <input type="text" name="login" id="login">
            <label for="senha">Insira a sua senha</label>
            <input type="password" name="senha" id="senha">
            <p>
                <div class="btn-container"> 
                <button type="submit" name="btn-entrar">Acessar suas entregas</button>
                </div>
            </p>
        </form>
</main>
<?php include_once "footer.php";?>    
</body>
</html>
