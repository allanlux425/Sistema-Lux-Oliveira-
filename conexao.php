<?php 
        $servidor = "localhost";
        $usuario = "u532375480_entregauser";
        $senha = "@Unifesp.425";
        $db_name = "u532375480_entrega";

        $conexao = mysqli_connect($servidor,$usuario,$senha, $db_name);
        if(!$conexao){
        die("Houve um erro ao conectar ao banco de dados: ". mysqli_connect_error());
        }
 ?>
