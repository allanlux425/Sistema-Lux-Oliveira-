<?php 
include("conexao.php");
//include("encaminhar_email.php");
$nome = $_GET["nome"];
$login  = $_GET["login"];
$senha = $_GET["senha"];
$msg = array();    


                $sql = "INSERT INTO login(login,nome,senha) VALUES ('$login','$nome','$senha')";
                if(mysqli_query($conexao,$sql)){
                        $msg[] = "$nome, você foi  cadastrado com sucesso. Faça o login para acessar o sistema. <br> Uma mensagem foi encaminhada para o seu e-mail";
                        if(!empty($msg)){
                            foreach($msg as $msg_cad){
                            header("location:encaminhar_email.php?msg=$msg_cad&nome=$nome&senha=$senha&login=$login");

                                
                            }
                        }
                }else{
                                    
                        echo "Erro".mysqli_connect_error($conexao);
                    }
  

?>