<?php 
    require_once __DIR__ . '/../util/verificacoes.php';
    require_once __DIR__ . '/../util/ieneParaReal.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <main>

    <h1>
        Conversão de Moedas
    </h1>

        <?php 

            if(form_post_nao_enviado()){
                echo "<h3>Por favor, retorne à home e preencha o formulário</h3>";
                die;
            }

            echo "Seus " . mostrar_reais_carteira() . " Reais equivalem a " . iene_para_real() . " Ienes.";

        ?>

    </main>
    
</body>
</html>