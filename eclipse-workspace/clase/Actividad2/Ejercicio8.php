<?php
/* Diseñar un programa que determine la cantidad total a pagar por una llamada telefónica de acuerdo a las siguientes premisas:*/


$x = 3;
$importe;

if ($x == 3) {
    echo "La llamada cuesta 10 céntimos";
} elseif ($x > 3){
    $importe = (10+(5*($x - 3)));
    echo "La llamada cuesta " . $importe;
}


?>