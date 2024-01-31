<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);


require 'Facade/Button.php';

$btn = new Button('kurica');
$btn->run();
