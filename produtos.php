<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Flor de Liz</title>
    <link rel="stylesheet" href="estilo.css">
    <style>
        /* Estilos para a galeria de produtos */
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .gallery img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .product-name {
            text-align: center;
            font-size: 18px;
            margin-top: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<header>
    <h1>Modelos Flor de Liz</h1>
</header>

<main>
    <div class="gallery">
        <div>
            <img src="img/bolsa1.jpg" alt="Bolsa de Crochê 1">
            <p class="product-name">Bolsa Maria</p>
        </div>
        <div>
            <img src="img/bolsa2.jpg" alt="Bolsa de Crochê 2">
            <p class="product-name">Bolsa Liz</p>
        </div>
        <div>
            <img src="img/bolsa3.jpg" alt="Bolsa de Crochê 3">
            <p class="product-name">Bolsa Sofia Dourada</p>
        </div>
        <div>
            <img src="img/bolsa4.jpg" alt="Bolsa de Crochê 4">
            <p class="product-name">Bolsa Maria Coloridas</p>
        </div><br>
        <div>
            <img src="img/bolsa5.jpg" alt="Bolsa de Crochê 5">
            <p class="product-name">Bolsa Helena Verde</p>
        </div>
        <div>
            <img src="img/bolsa6.jpg" alt="Bolsa de Crochê 6">
            <p class="product-name">Bolsa Sofia Prata</p>
        </div>
        <div>
            <img src="img/bolsa7.jpg" alt="Bolsa de Crochê 7">
            <p class="product-name">Bolsa Sofia Preta</p>
        </div>
        <div>
            <img src="img/bolsa8.jpg" alt="Bolsa de Crochê 8">
            <p class="product-name">Bolsa Prada Offwhite</p>
        </div>
        <!-- Adicione mais produtos conforme necessário -->
    </div>
</main>

<footer>
    <p>© 2024 Flor de Liz - Todos os direitos reservados.</p>
</footer>

</body>
</html>


