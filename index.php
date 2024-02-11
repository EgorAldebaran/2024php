<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

require 'Adapter/iBike.php';
require 'Adapter/Bike.php';
require 'Adapter/WaterBike.php';
require 'Adapter/AdapterBike.php';

$bike = new Bike;
$wbike = new WaterBike;
$adapter = new AdapterBike($wbike);


function riding(iBike $bike)
{
    $bike->drive();    
}

riding($bike);

/// не сработает так как нужен адаптер
///riding($wbike);

riding($adapter);
