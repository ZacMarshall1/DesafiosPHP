<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main>
        <h1>
            Resultado
        </h1>

        <p>
            <?php 
                if (isset($_POST["antecessorSucessorNumero"])) {

                    $antecessorSucessorValue = $_POST["antecessorSucessorNumero"];
                    $antecessorValue = $antecessorSucessorValue - 1;
                    $sucessorValue = $antecessorSucessorValue + 1;

                    echo "Número digitado: " . $antecessorSucessorValue . "<br>";
                    echo "Antecessor do número digitado: " . $antecessorValue . "<br>";
                    echo "Sucessor do número digitado: " . $sucessorValue . "<br>";
                }
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>    

</body>
</html>