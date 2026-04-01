<?php
// Inicia a sessão se ainda não estiver iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Inclui a conexão com o banco se ainda não foi incluída
if (!isset($conexao)) {
    require_once("conexao.php");
}
?>

<nav class="menu">
    <!-- Links principais -->
    <a href="../index.php" class="menu-btn">Home</a>
    <a href="recupera_senha.php">Recuperar Senha</a>

    <!-- Link "Cadastrar usuário" só aparece se o usuário NÃO estiver logado -->
    <?php
    if (!isset($_SESSION['id_usuario']) || empty($_SESSION['id_usuario'])) {
        echo '<a href="tela_cad_usuario.php" class="menu-btn">Cadastrar usuário</a>';
    }
    ?>

    <!-- Botão Minha Conta para usuários logados -->
<?php if(isset($_SESSION['id_usuario'])): 
        $id = $_SESSION['id_usuario'];
        $sql = "SELECT nome FROM login WHERE id_usuario = '$id'";
        $resultado = mysqli_query($conexao, $sql);
        $dados = mysqli_fetch_assoc($resultado);
    ?>
    <div class="dropdown">
        <button class="dropbtn conta-btn">
            Bem-vindo, <?= htmlspecialchars($dados['nome']) ?> ▾
        </button>
            
        <div class="dropdown-content">
            <!--<a href="meus_produtos.php">Meus produtos</a> -->
            <?php include ("link.php"); ?>
        </div>
    </div>
    <?php endif; ?>
</nav>