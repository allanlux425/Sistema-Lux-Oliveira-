<?php
        include("dados_user.php");
        
        
        
        
        
        $headers = "MIME-Version 1.0\r\n";
                        $headers .= "Content-type: text/html; charset=utf-8\r\n";
                        $headers .= $to = $email;
                        $subject = "Bem vindo ao Sistema Lux's Olivieira";
                        $mesage = "Bem vindo ao Sistema Lux's Olivieira $nome! \nAqui estão os seus dados para o acesso: \n Login: $login\n Senha: $senha";
                        $headers = 'From: lux.oliveira425@gmail.com'. "\r\n". 'Reply-To:lux.oliveira425@gmail.com';
        
        

        mail($to, $subject, $mesage, $headers);
        header("location:index.php?msg=$msg");




?>