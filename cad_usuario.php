<?php 
    //include("conexao.php");
    $nome = $_GET["nome"];
    $login  = $_GET["login"];
    $senha = $_GET["senha"];
    $email = $_GET["email"];


    $msg = array();    
    


                    if($nome != "" && $senha != "" && $login != "" && $email != ""){

                        if(empty($msg)){
                             header("location:verifica_user.php?login=$login&nome=$nome&senha=$senha&email=$email");
                         }
                        }else{
                           $msg[] = "Prencha os campos para realizar o cadastro no sistema";
                            if(!empty($msg)){
                               foreach($msg as $msg_cad){
                                    header("location:tela_cad_usuario.php?msg=$msg_cad");
                                }
                            }
                    }




                






                        





                    
                            


            
?>