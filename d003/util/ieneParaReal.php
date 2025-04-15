<?php 

    function iene_para_real(){

        $reaisNaCarteira = $_POST["reaisNaCarteira"];
        $valorCemIenes = 4.11;
        $valorTotal = ($reaisNaCarteira * 100) / $valorCemIenes;

        return number_format($valorTotal, 2, ',', '.');
    }

?>