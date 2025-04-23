<?php 
    require_once __DIR__ . '/../util/analise.php';
?>
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
        <?php 
        if(formPostNaoEnviado()){
            echo "Por favor, volte à home e preencha o formulário.";
            die;
        } else {
            separarNumero();
        }
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>