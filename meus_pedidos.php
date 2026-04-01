<?php

// inicia sessão apenas se necessário
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// conexão com banco
require_once("conexao.php");

// se usuário já estiver logado redireciona
if (!empty($_SESSION['logado'])) {
    if(isset($_GET["msg"]) && isset($_GET['produto_id'])){
        $msg = $_GET['msg'];
        $produto_id = $_GET['produto_id'];
        header("Location: tela_meus_pedidos.php?msg=".$msg."&produto_id=".$produto_id);
        exit;
    }
}

?>