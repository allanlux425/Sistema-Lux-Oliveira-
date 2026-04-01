
<?php   

        
        
        
       //conexao
       include("conexao.php");
       
       //sessões        
       session_start();

       
       //verifica se o usuário clicou no botão cadatrar
       if(isset($_POST["btn-entrar"])){
           
            $erros = array();
           $login = $_POST["login"]; //pega o nome do input login
            $senha = mysqli_escape_string($conexao,$_POST["senha"]);
           
            //verificar se os campos estão vazios

            if(empty($login) || empty($senha )){
                
                $erros[] = "O campo login/senha precisam ser preenchidos";
                if(!empty($erros)){
                    foreach($erros as $erros){
                        header("location:tela_login.php?msg=$erros");
                    }
                } 
               
                 

            }else{
                    //seleciona o login do banco de dados, caso seja igual a que o usuário digitou no formulário

                    $sql = "SELECT * FROM login WHERE login = '$login' AND senha = '$senha'";
                    $resultados = mysqli_query($conexao,$sql);
                   
                    if(mysqli_num_rows($resultados) > 0){
                        //$senha = md5($senha);
                        $sql = "SELECT * FROM login WHERE login = '$login' AND senha = '$senha' ";
                        $resultados = mysqli_query($conexao,$sql);
                      //   mysqli_close($conexao);
                        if(mysqli_num_rows($resultados) == 1)
                            $senha = md5($senha);
                            $dados = mysqli_fetch_array($resultados);
                            $_SESSION['logado'] = true;
                            $_SESSION['id_usuario'] = $dados['id_usuario'];
                            
                            header('location:tela_cad_produtos.php');
                        }else{

                        $erros[] = "Usuário inexistente";
                        if(!empty($erros)){
                            foreach($erros as $erros){
                                header ("location:tela_login.php?msg=$erros");
                            }
                        }
                        else{
                             echo "Erro".mysqli_connect_error($conexao);
                        }
                        
                    }
                }    

    }               
                    
        
        
?>
