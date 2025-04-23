<?php 
    function analisarNumeroReal(){
        $numeroAnalise = $_POST["numeroReal"];
        $arrayAnalise = explode(".", $numeroAnalise); //separa o numero inteiro das casas decimais
        return $arrayAnalise;
    }

    function separarNumero(){
        $arrayAnalise = analisarNumeroReal();
        if (count($arrayAnalise) === 1){
            echo "O número inteiro é " . $arrayAnalise[0] . ", e não há parte decimal";
        } else {
            echo "O número inteiro é " . $arrayAnalise[0] . ", e a parte decimal é " . $arrayAnalise[1];
        }
    }

    function formPostNaoEnviado(){
        return $_SERVER['REQUEST_METHOD'] != 'POST'; //verifica se o form foi enviado
    }
?>