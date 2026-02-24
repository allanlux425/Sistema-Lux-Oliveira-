
<?php 

    //echo '<head><link rel="stylesheet" href="style.css"></head>';
    include('conexao.php');
    
     //sessão

     session_start();

     //dados vindos da sessão
     $id = $_SESSION['id_usuario'];
     $msg = array();
    
    //dadps do usuario da tela cadastro livro
            $livro = $_POST["nome_livro"];
            $autor = $_POST["nome_autor"];
            $categoria = $_POST["nome_categoria"];


            if($livro != "" && $autor != "" && $categoria != ""){

                    $sql = "INSERT INTO cad_livro(livro,autor, categoria, id_usuario) VALUES ('$livro','$autor','$categoria','$id')";
                    $sql_categoria = "INSERT INTO categoria(categoria) VALUES ('$categoria')";
                    if(mysqli_query($conexao,$sql_categoria)){

                        if(mysqli_query($conexao,$sql)){
                        
                            $msg[] = "Cadastro realizado com sucesso";
                            if(!empty($msg)){
                                foreach($msg as $msg_cad){
    
                                    header("location:tela_cad_livro.php?msg=$msg_cad");  
                                }
                            }
                    }
                    
                        
                                    
                    }else{

                        echo "Erro".mysqli_connect_error($conexao);
                    }
            }else{
                        $msg[] = "Por favor, cadastre um livro na livraria";
                        if(!empty($msg)){
                            foreach($msg as $msg_cad){

                                header("location:tela_cad_livro.php?msg=$msg_cad"); 
                            }
                        }
                        mysqli_close($conexao);
                        
            }     

?>
