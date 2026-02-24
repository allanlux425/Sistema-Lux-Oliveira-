<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
    
</head>
<body>
<main>
               
        <h2>Recuperar a senha</h2>

        <form action="<?php $_SERVER["PHP_SELF"] ?>" method="get">

            <label for="login">Insira o seu login</label>
            <input type="text" name="login" id="login">
            <button type="submit" name="btn-entrar">Recuperar Senha</button>
        </form>

         <?php
            if(isset ($_GET['login'])){
                    
                include("recupera_senha.php");

            }
         
         ?>
        <a href="livros_cadastrados.php">Livros cadastrados</a>|

        <a href="tela_livro_secao.php">Buscar os livros por categorias</a>|

        <a href="index.php">HOME</a>|
        

        
        
        



    </main>
</body>
</html>
