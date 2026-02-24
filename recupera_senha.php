<?php

//conexão
 include("conexao.php");

$login = $_GET['login'];


$sql = "SELECT senha FROM login where login = '$login' ";
                $resultados_db = mysqli_query($conexao,$sql);
                while($dados = mysqli_fetch_array($resultados_db)){
        ?>
        <p>A sua senha é
           <?php 
            echo $dados['senha'];   
        }?>
        </p>                
