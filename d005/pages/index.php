<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 5</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main>
        <form action="analise.php" method="post">
            <div>
                <label for="Numero Real">Digite um número para a análise</label><br>
                <input type="number" name="numeroReal" id="numeroReal" step="0.001">
            </div>
            <button type="submit">Analisar</button> 
        </form>
    </main>
</body>
</html>