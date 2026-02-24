<?php
        require_once('conexao.php');
        
       
        //sessão

        session_start();

        //dados
        //verificação se o usuário está logado

      if(isset($_SESSION['logado'])){
          
          
          include('tela_minha_biblioteca.php');       

           

       }
       
?>

