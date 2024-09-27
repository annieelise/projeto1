<?php
// Início do conteúdo PHP - o conteúdo é principalmente HTML com algumas marcações PHP para estruturar.
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flor de Liz</title>
    <link rel="stylesheet" href="estilo.css">
    <style>
        /* Estilos para centralizar a copy no meio da página */
        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh; /* Ajusta a altura mínima para centralizar verticalmente */
            padding: 20px;
            text-align: center;
        }

        .content p {
            line-height: 1.6; /* Ajusta o espaçamento entre linhas */
            max-width: 600px; /* Define uma largura máxima para o texto */
        }
    </style>
</head>
<body>

<!-- Topo do site -->
<header>
    <h1>Flor de Liz</h1>
   
</header>

<!-- Conteúdo centralizado -->
<main class="content">
    <?php
    // Início do bloco de HTML com a copy em PHP
    echo '<p>';
    echo '<strong>Flor de Liz: Bolsas de Crochê Artesanais</strong><br><br>';
    echo 'Bem-vindo à Flor de Liz! Aqui, cada bolsa é feita à mão com carinho, exclusividade e atenção aos detalhes. Nossas peças são únicas, produzidas sob encomenda para refletir seu estilo de forma especial.<br><br>';

    echo '<strong>Por que escolher a Flor de Liz?</strong><br><br>';
    echo '- <strong>Exclusividade:</strong> Bolsas feitas artesanalmente, uma a uma, para você.<br>';
    echo '- <strong>Qualidade:</strong> Fios de alta qualidade e técnicas tradicionais.<br>';
    echo '- <strong>Sustentabilidade:</strong> Valorize o artesanal e o consumo consciente.<br><br>';

    echo 'Explore nossa coleção e encomende sua bolsa personalizada. Na Flor de Liz, cada peça conta uma história: a sua!';
    echo '</p>';
    ?>
</main>

<!-- Rodapé do site -->
<footer>
    <p>© 2024 Flor de Liz - Todos os direitos reservados.</p>
</footer>

</body>
</html>
