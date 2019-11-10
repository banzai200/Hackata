<?php
require 'vendor/autoload.php';
use EscapeWork\Frete\Correios\PrecoPrazo;
use EscapeWork\Frete\Correios\Data;
use EscapeWork\Frete\FreteException;
use EscapeWork\Frete\Correios\ConsultaCEP;
use GuzzleHttp\client;

$moto = new main;
$moto->motoboy('04849507', '02363130');

class main{


public function correios($cepOrigem, $cepDestino, $comprimento, $altura, $largura, $diametro, $peso)
{
    $correios = new PrecoPrazo();
    $correiosEnd = new ConsultaCEP();
    $codigos = ['04014', '04510', '40169', '40215', '40290'];
    foreach ($codigos as $codigo){
        $sedex = $correios->setCodigoServico($codigo)
            ->setCepOrigem($cepOrigem)
            ->setCepDestino($cepDestino)
            ->setComprimento($comprimento)
            ->setAltura($altura)
            ->setLargura($largura)
            ->setDiametro($diametro)
            ->setPeso($peso);
    try {
        $correiosEnd->setCep($cepDestino);
        $result = $sedex->calculate();
        var_dump($result['cServico']['Valor']);
        var_dump($result['cServico']['PrazoEntrega']);
    } catch (FreteException $e) {
        var_dump($e->getMessage());
    }
}
}
function motoboy($cepOrigem, $cepDestino, $cidade = 'sp%2Fsao-paulo'){
$motoboy = new GuzzleHttp\Client;
$no = $motoboy->post('https://www.motoboy.com/apiV1/orcamento?cidade=sp%2Fsao-paulo&endereco1_cep='.$cepOrigem.'&endereco2_cep='.$cepDestino);
$no = json_decode($no->getBody()->getContents(), true);
echo floatval($no["valor"]);
}}
