<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadasatrar Usuário</title>
</head>
<body>
    <main>
    <?php 
                            

                            if(isset($_GET["msg"])){

                                echo $_GET["msg"];
                            }
                ?>       

        <form action="cad_usuario.php" method="get">
            <h2>Castre-se no sistema livraria Diego's Oliveira</h2>
        <label for="nome">Nome do Usuário</label>
        <input type="text" name="nome" id="nome">
        <label for="senha">senha</label>
        <input type="password" name="senha" id="senha">
        <label for="login">Login</label>
        <input type="text" name="login" id="login">
        <button type="submit" name="btn-cadastro">Cadastrar</button>
    </form>
    <a href="livros_cadastrados.php">Livros cadastrados</a>|

        <a href="tela_livro_secao.php">Buscar os livros por categorias</a>|

    </main>
    
</body>
</html>