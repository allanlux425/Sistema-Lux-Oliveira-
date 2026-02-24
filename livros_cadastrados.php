
<?php 
        include("conexao.php");
        //include("verifica_session.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Livros cadastrados</title>
</head>
<body>
    <main>
   <table>

        <thead>

            <tr>
                <th>Livro</th>
                <th>Autor</th>
                <th>Categoria</th>

            </tr>
        </thead>
    <?php
                $sql = "SELECT * FROM cad_livro";
                $resultados_db = mysqli_query($conexao,$sql);
                while($dados = mysqli_fetch_array($resultados_db)){
                
    ?>
        <thead>

        <tr>
            <td><?=  $dados['livro'];?></td>
            <td><?=  $dados['autor'];?></td>
            <td><?=  $dados['categoria'];?></td>

        </tr>
         
        </thead>
    <?php }; ?>    
    </table>

    <a href="tela_cad_livro.php">Cadastrar novo livro</a>|
    <a href="logout.php">Sair</a>|
    <a href="tela_livro_secao.php">Buscar os livros por categorias</a>|
    <a href="minha_biblioteca.php">Minha Biblioteca</a>
      
 </main>   
</body>
</html>
