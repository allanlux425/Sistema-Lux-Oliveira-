<?php 
// processa_entregador.php
$nome = isset($_GET['nome']) ? trim($_GET['nome']) : "";

if ($nome != "") {
    // Redireciona para cadastro passando o valor
    header("Location: include_cad_entregador.php?nome=$nome");
    exit;
} else {
    // Redireciona de volta com erro (opcional)
    header("Location: motoboy.php?msg=" . urlencode("Preencha o nome do entregador"));
    exit;
}
?>