<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    // Processamento da mensagem (pode salvar em um banco de dados, enviar por e-mail, etc.)
    echo "<h2>Mensagem Enviada com Sucesso</h2>";
    echo "<p>Obrigado, $nome! Entraremos em contato em breve.</p>";
} else {
    echo "<h2>Erro ao enviar a mensagem.</h2>";
}
?>
