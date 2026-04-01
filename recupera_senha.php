<?php

//conexão
 include("conexao.php");

$login = $_GET['login'];






         $sql = "SELECT *  FROM login where login = '$login' ";
        $resultados_db = mysqli_query($conexao,$sql);
        $row = mysqli_num_rows( $resultados_db);
        
        if($row >= 1){

            while($dados = mysqli_fetch_assoc($resultados_db)){
            echo $dados['senha'];   
        
        }
       }else{
            echo "usuário inexistente";
       }
        ?>
        </p>                
