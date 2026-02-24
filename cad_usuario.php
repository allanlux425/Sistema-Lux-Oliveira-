<?php 
    //include("conexao.php");
    $nome = $_GET["nome"];
    $login  = $_GET["login"];
    $senha = $_GET["senha"];



    $msg = array();    
    


                    if($nome != "" && $senha != "" && $login != ""){

                        if(empty($msg)){
                             header("location:verifica_user.php?login=$login&nome=$nome&senha=$senha");
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