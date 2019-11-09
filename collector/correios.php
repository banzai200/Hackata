<?php
require 'vendor/autoload.php';

use EscapeWork\Frete\Correios\PrecoPrazo;
use EscapeWork\Frete\Correios\Data;
use EscapeWork\Frete\FreteException;


$frete = new PrecoPrazo();

$frete->setCodigoServico(Data::SEDEX_10)
      ->setCepOrigem('05660-000')   # apenas numeros, sem hifen(-)
      ->setCepDestino('06715-790') # apenas numeros, sem hifen(-)
      ->setComprimento(30)              # obrigatorio
      ->setAltura(30)                   # obrigatorio
      ->setLargura(30)                  # obrigatorio
      ->setDiametro(30)                 # obrigatorio
      ->setPeso(50);                   # obrigatorio
try {
    $result = $frete->calculate();
    var_dump($result);
}
catch (FreteException $e) {
    return $e->getMessage();
}
?>