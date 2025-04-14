<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Aleatórios</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main>
        <h1>
            Gerando Números aleatórios
        </h1>

        <p>
            Gerando um número aleatório entre 0 e 100...
        </p>

        <?php
            require_once 'util.php';
            echo generateNumberBetween1and100();
        ?>

        <button onclick="javascript:document.location.reload()">Gerar</button>
    </main>
</body>
</html>