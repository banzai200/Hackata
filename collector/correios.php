<?php
require 'vendor/autoload.php';

use EscapeWork\Frete\Correios\PrecoPrazo;
use EscapeWork\Frete\Correios\Data;
use EscapeWork\Frete\FreteException;

$cep = 49999;

for($i = 11111;$i <= $cep; $i++){
$frete = new PrecoPrazo();
//echo $i;
$frete->setCodigoServico(Data::SEDEX)
      ->setCepOrigem('02363130')   # apenas numeros, sem hifen(-)
      ->setCepDestino('064'.strval($i)) # apenas numeros, sem hifen(-)
      ->setComprimento(30)              # obrigatorio
      ->setAltura(30)                   # obrigatorio
      ->setLargura(30)                  # obrigatorio
      ->setDiametro(30)                 # obrigatorio
      ->setPeso(50);                   # obrigatorio
try {
    $result = $frete->calculate();
    echo 'cep : ' . '064'.strval($i);
    echo 'valor :' . $result['cServico']['Valor'];
    echo 'prazo :' . $result['cServico']['PrazoEntrega'];

   // var_dump($result); // debugge o resultado!
}
catch (FreteException $e) {
    // trate o erro adequadamente (e não escrevendo na tela)
    echo $e->getMessage();
    echo $e->getCode(); // este código é o código de erro dos correios
                        // pode ser usado pra dar mensagens como CEP inválido para o cliente
}
}
?>