<?php
namespace collector;
use EscapeWork\Frete\Correios\PrecoPrazo;

require 'collector/correios.php';
require 'collector/sql.php';
require 'collector/jadlog.php';

function exec($cep)
{
    $correios = new PrecoPrazo();
    $jadlog = new \Jadlog();
}

