<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fale Conosco - Flor de Liz</title>
    <link rel="stylesheet" href="estilo.css">
    <style>
        /* Estilos gerais para a centralização do conteúdo */
        .container {
            display: flex;
            justify-content: center; /* Centraliza horizontalmente */
            align-items: center; /* Centraliza verticalmente */
            min-height: 80vh; /* Define a altura mínima para a centralização vertical */
            padding: 20px;
            text-align: center; /* Centraliza o texto dentro do formulário */
        }

        /* Estilos para o formulário */
        form {
            background: #f9f9f9; /* Fundo do formulário */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra suave para destaque */
            max-width: 500px; /* Define a largura máxima do formulário */
            width: 100%;
        }

        /* Estilos para os campos e o botão */
        input, textarea {
            width: calc(100% - 20px); /* Ajuste da largura para caber dentro do padding */
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            background: #5a9; /* Cor de fundo do botão */
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background: #48a; /* Cor ao passar o mouse */
        }
    </style>
</head>
<body>

<header>
    <h1>Fale Conosco</h1>
</header>

<main class="container">
    <form action="processa_formulario.php" method="post">
        <h2>Entre em Contato Conosco</h2>
        <input type="text" name="nome" placeholder="Seu Nome" required>
        <input type="email" name="email" placeholder="Seu E-mail" required>
        <textarea name="mensagem" rows="5" placeholder="Sua Mensagem" required></textarea>
        <button type="submit">Enviar</button>
    </form>
</main>

<footer>
    <p>© 2024 Flor de Liz - Todos os direitos reservados.</p>
</footer>

</body>
</html>























