
<?php 
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $db_name = "livraria";

        $conexao = mysqli_connect($servidor,$usuario,$senha, $db_name);

        if(!$conexao){

         die("Houve um erro ao conectar ao banco de dados: ". mysqli_connect_error());
        }
         

?>
