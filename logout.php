
<?php 
    //Encerrando a sessão 

    session_start();//inicia a sessão
    session_unset();//limpa a sessão
    session_destroy();

    header('location:index.php');



?>
