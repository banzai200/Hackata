<?php
require 'vendor/autoload.php';
use EscapeWork\Frete\Correios\PrecoPrazo;
use EscapeWork\Frete\FreteException;
use EscapeWork\Frete\Correios\ConsultaCEP;
use GuzzleHttp\client;

$moto = new main;
$moto->correios('04849507', '02363130', '30', '30', '10', '10', '5');

class main{


public function correios($cepOrigem, $cepDestino, $comprimento, $altura, $largura, $diametro, $peso)
{
    $correios = new PrecoPrazo();
    $correiosEnd = new ConsultaCEP();
    $codigos = ['04014', '04510', '40169', '40215', '40290'];
    $op = [];
    $c = 0;
    foreach ($codigos as $codigo){
        $sedex = $correios->setCodigoServico($codigo)
            ->setCepOrigem($cepOrigem)
            ->setCepDestino($cepDestino)
            ->setComprimento($comprimento)
            ->setAltura($altura)
            ->setLargura($largura)
            ->setDiametro($diametro)
            ->setPeso($peso);
        $destino = $correiosEnd->setCep($cepDestino)->find();
        $remetente = $correiosEnd->setCep($cepOrigem)->find();
    try {
        $result = $sedex->calculate();
        $result = ['valor' => $result['cServico']['Valor'], 'prazo' => $result['cServico']['PrazoEntrega']];
        $op[$c] = $result;
        $lucro = intval($result['valor'])*0.15;
        $op[1][$c] = $lucro;
        $c++;
    } catch (FreteException $e) {
        $e->getMessage();
    }
        $destino = [$destino->end, $destino->uf, $destino->cidade, $destino->bairro];
        $remetente = [$remetente->end, $remetente->uf, $remetente->cidade, $remetente->bairro];
        $dcidade = [strtolower($destino[1]), explode(' ', strtolower($destino[2]))];
        $implode = $dcidade[1];
        $implode = implode('-', $implode);
        $dcidade = [$dcidade[0], $implode];
        $implode = implode('%2F', $dcidade);
        $normald = $this->normalize($implode);
        $rcidade = [strtolower($remetente[1]), explode(' ', strtolower($remetente[2]))];
        $implode = $rcidade[1];
        $implode = implode('-', $implode);
        $rcidade = [$rcidade[0], $implode];
        $implode = implode('%2F', $rcidade);
        $normalr = $this->normalize($implode);
        }
    if($normald == $normalr) {
       $motoboy = $this->motoboy($cepOrigem, $cepDestino, $normalr);}
    return [$op, $motoboy];
}
function motoboy($cepOrigem, $cepDestino, $cidade = 'sp%2Fsao-paulo'){
    $motoboy = new GuzzleHttp\Client;
    $no = $motoboy->post('https://www.motoboy.com/apiV1/orcamento?cidade='.$cidade.'&endereco1_cep='.$cepOrigem.'&endereco2_cep='.$cepDestino);
    $no = json_decode($no->getBody()->getContents(), true);
    return $motoboy;
}



    function normalize($string)
    {
        $table = array(
            'Š' => 'S', 'š' => 's', 'Ð' => 'Dj', 'd' => 'dj', 'Ž' => 'Z', 'ž' => 'z', 'C' => 'C', 'c' => 'c', 'C' => 'C', 'c' => 'c',
            'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'A', 'Ç' => 'C', 'È' => 'E', 'É' => 'E',
            'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O',
            'Õ' => 'O', 'Ö' => 'O', 'Ø' => 'O', 'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ý' => 'Y', 'Þ' => 'B', 'ß' => 'Ss',
            'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'a', 'ç' => 'c', 'è' => 'e', 'é' => 'e',
            'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 'ð' => 'o', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o',
            'ô' => 'o', 'õ' => 'o', 'ö' => 'o', 'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ý' => 'y', 'ý' => 'y', 'þ' => 'b',
            'ÿ' => 'y', 'R' => 'R', 'r' => 'r',
        );

        return strtr($string, $table);
    }


}
