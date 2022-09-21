<?php

require_once "vendor/autoload.php";
use Wead\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('53200080');

print_r($resultado);