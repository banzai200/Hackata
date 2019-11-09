<?php
require 'vendor/autoload.php';

use JansenFelipe\LoggiPHP\Presto\ShopResource;
use JansenFelipe\LoggiPHP\Presto\OrderResource;
use JansenFelipe\LoggiPHP\Presto\Entities\LocationEntity;

$shopResource = new ShopResource();

$result = $shopResource->all();

foreach ($result as $shop) {
    
    echo $shop->id;
    echo $shop->pk;
    echo $shop->name;
}

/*
 * Now, I will estimate the price to deliver at a certain point
 */

$from = $result[0]; //Get a first shop

$orderResource = new OrderResource();

$to = new LocationEntity();
$to->latitude = -19.8579253;
$to->longitude = -43.94522380000001;

$result = $orderResource->estimation($from, $to);

echo 'Estimated price: '. $result->price;