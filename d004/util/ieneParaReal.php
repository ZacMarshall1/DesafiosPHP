<?php 

    function cotacao_iene(){

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoMoedaPeriodo(moeda=@moeda,dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@moeda=\'JPY\'&@dataInicial=\'04-09-2025\'&@dataFinalCotacao=\'04-16-2025\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,cotacaoVenda,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);

        $cotacao = $dados["value"][0]["cotacaoCompra"];

        return $cotacao;
    }

    function iene_para_real(){

        $reaisNaCarteira = $_POST["reaisNaCarteira"];
        $valorIene = cotacao_iene();
        $valorTotal = $reaisNaCarteira / $valorIene;

        return number_format($valorTotal, 0);
    }

?>