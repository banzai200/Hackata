<?php
require 'vendor/autoload.php';
use EscapeWork\Frete\Correios\PrecoPrazo;
use EscapeWork\Frete\Correios\Data;
use EscapeWork\Frete\FreteException;
use EscapeWork\Frete\Correios\ConsultaCEP;
use GuzzleHttp\client;
require 'collector/jadlog.php';
$fuck = new main;
$fuck->correios('01138000', '02363130', '45', '45', '15', '15', '15');

$jadlog = new \Jadlog();

class main{

//$fuck = new GuzzleHttp\Client;
//$no = $fuck->post('https://www.motoboy.com/apiV1/orcamento?cidade=sp%2Fsao-paulo&endereco1_cep=05016000&endereco2_cep=01138000');
//echo $no->getBody()->getContents();
public function correios($cepOrigem, $cepDestino, $comprimento, $altura, $largura, $diametro, $peso)
{
    $correios = new PrecoPrazo();
    $correiosEnd = new ConsultaCEP();
    $correios->setCodigoServico(Data::$codigos)
        ->setCepOrigem($cepOrigem)
        ->setCepDestino($cepDestino)
        ->setComprimento($comprimento)
        ->setAltura($altura)
        ->setLargura($largura)
        ->setDiametro($diametro)
        ->setPeso($peso);

    try {
        $result = $correios->calculate();
        print_r($result);
    }
    catch (FreteException $e) {
        print_r($e->getMessage());
        return $e->getMessage();

    }
}
function motoboy($cepOrigem, $cepDestino, $cidade){

}}
