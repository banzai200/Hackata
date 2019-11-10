<?php
require 'vendor/autoload.php';

use EscapeWork\Frete\Correios\PrecoPrazo;
use EscapeWork\Frete\Correios\Data;
use EscapeWork\Frete\FreteException;
use EscapeWork\Frete\Correios\ConsultaCEP;

$consulta = new ConsultaCEP();
$frete = new PrecoPrazo();

$frete->setCodigoServico(Data::SEDEX)
      ->setCepOrigem('05660000')   # apenas numeros, sem hifen(-)
      ->setCepDestino('06715790') # apenas numeros, sem hifen(-)
      ->setComprimento(30)              # obrigatorio
      ->setAltura(30)                   # obrigatorio
      ->setLargura(30)                  # obrigatorio
      ->setDiametro(30)                 # obrigatorio
      ->setPeso(10);                   # obrigatorio


try {
    $result = $frete->calculate();
    $nano = $consulta->setCep('01138000')->find();
    var_dump($nano->end, $nano->bairro, $nano->cidade);
}
catch (FreteException $e) {
    return $e->getMessage();
}

?>