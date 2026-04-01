<?php 
include("conexao.php");
//include("encaminhar_email.php");
$nome = $_GET["nome"];


$msg = array();    


                $sql = "INSERT INTO entregador(nome_entregador) VALUES ('$nome')";
                if(mysqli_query($conexao,$sql)){
                    header("Location: motoboy.php?msg=" . urlencode("Entregador parceiro cadstrado com sucesso"));
    exit;
                        
                }else{
                                    
                        echo "Erro".mysqli_connect_error($conexao);
                    }
  

?>