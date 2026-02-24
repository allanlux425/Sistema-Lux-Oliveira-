<?php 
         
        //conexão

        require_once('conexao.php');
        //require_once('cad_livro.php');
        //sessão

        session_start();

        //dados


        $id = $_SESSION['id_usuario'];
        $sql = "SELECT * FROM login WHERE id_usuario = '$id' ";
       $resultado= mysqli_query($conexao,$sql);
       $dados = mysqli_fetch_array($resultado);

        mysqli_close($conexao);
       //verificação se o usuário está logado

       if(!isset($_SESSION['logado'])){

            header('location:index.php');

       }
       
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastrar Livros</title>
</head>
<body>
    <h1>Olá <?php echo $dados['nome']?> Saja bem-vindo</h1>
    <main>

    <?php 
                            

                            if(isset($_GET["msg"])){

                                echo $_GET["msg"];
                            }
                ?> 
            
        <form action="cad_livro.php" method="post">
                <h2>Bem vindo ao Sistema de cadastro Diego's Oliveira: Cadstre aqui o seu livro</h2>

                <label for="nome_livro">Nome do livro</label>
                <input type="text" name="nome_livro" id="nome_livro">

                <label for="autor">Nome do autor</label>
                <input type="text" name="nome_autor" id="nome_autor">

                <label for="livro">Nome da Categoria</label>
                <input type="text" name="nome_categoria" id="nome_categoria">
                
                <button type="submit" name="btn-cadastrar">Cadastrar livro</button>
        </form>
        <a href="logout.php">Sair</a>|
        <a href="livros_cadastrados.php">Livros cadastrados</a>|
        <a href="tela_livro_secao.php">Buscar os livros por categorias</a>|
        <a href="minha_biblioteca.php">Minha Biblioteca</a>
         
    </main>
</body>
</html>
