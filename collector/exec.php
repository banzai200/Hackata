<?php
require 'collector/jadlog.php';


$jad = new Jadlog([
'Cep_origem' => '02222222',
'Cep_destino' => '05016000',
'peso' => '30',
'valor' => '10,00',
'modalidade' => '5',
'cnpj' => '17977285000118',
'password' =>'C2o0E1m3',
'seguro' =>'',
'coleta' =>'N',
'acobrar' => 'N',
'entrega' => 'D',

]);

echo $jad->calcular_frete() ;

