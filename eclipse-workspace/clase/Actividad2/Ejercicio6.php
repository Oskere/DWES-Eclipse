<?php
/*Hacer una página PHP que tenga dos variables y nos indique si la suma de los números es mayor que el producto (resultado de la multiplicación) de ellos o al contrario:*/

$x = 4;
$y = 6;

if (($x +  $y) > ($x * $y)) {
    echo "la suma es mayor que el producto";
} else {
    echo "el producto es mayor que la suma";
}


?>