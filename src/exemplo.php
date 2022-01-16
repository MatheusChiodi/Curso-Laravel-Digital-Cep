<?php 
require_once "vendor/autoload.php";

use Wead\DigitalCep\Search;

$busca = new Search;
$resultado = $busca->getAddressFromZipCode('14802406');

print_r($resultado);

?>