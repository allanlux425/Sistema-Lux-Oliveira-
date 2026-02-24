<?php 

        include("conexao.php");
        


        //verifica se já existe o usuário
        $nome = $_GET["nome"];
        $login  = $_GET["login"];
        $senha = $_GET["senha"];
        
        $msg = array();
        
        $sql = "SELECT login FROM login WHERE login = '$login' ";
        $registro_bd = mysqli_query($conexao, $sql);
        //mysqli_close($conexao);
        
        $row = mysqli_num_rows( $registro_bd);
        
        if($row >= 1){
            
            $msg[] = "Usuário já cadastrado";
            if(!empty($msg)){
            foreach($msg as $msg_cad){
                 header("location:index.php?msg=$msg_cad");
             }
            }
        }else{
               
            header("location:include_cad_user.php?nome=$nome&senha=$senha&login=$login");
        }
            
        
        




?>