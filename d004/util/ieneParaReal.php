<?php 

    function cotacao_iene(){

        $inicio = date("m/d/Y", strtotime("-7 days"));
        $fim = date("m/d/Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoMoedaPeriodo(moeda=@moeda,dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@moeda=\'JPY\'&@dataInicial=\''. $inicio.'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,cotacaoVenda,dataHoraCotacao';
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