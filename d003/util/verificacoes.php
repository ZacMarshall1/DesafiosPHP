<?php 
    function form_post_nao_enviado(){

        return $_SERVER['REQUEST_METHOD'] != 'POST';

    }

    function mostrar_reais_carteira(){
        $realCarteiraValor = $_POST["reaisNaCarteira"];
        return $realCarteiraValor;
    }
?>