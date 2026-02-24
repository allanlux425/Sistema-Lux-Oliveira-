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
                <?php 
                            

                            if(isset($_GET["msg"])){

                                echo $_GET["msg"];
                            }
                ?>       


        <h2>Bem vindo ao Sistema de cadastro Diego's Oliveira</h2>

        <form action="login.php" method="post">

            <label for="login">Insira o seu login</label>
            <input type="text" name="login" id="login">
            <label for="senha">Insira a sua senha</label>
            <input type="password" name="senha" id="senha">
            <button type="submit" name="btn-entrar">Acessar sua livraria</button>
        </form>

        <a href="livros_cadastrados.php">Livros cadastrados</a>|

        <a href="tela_livro_secao.php">Buscar os livros por categorias</a>|

        <a href="tela_cad_usuario.php">Cadastre-se</a>|
        
        <a href="tela_recupera_senha.php">Recuperar Senha</a>

        
        
        



    </main>
</body>
</html>
