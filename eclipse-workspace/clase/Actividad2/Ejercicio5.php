<?php
/*Hacer una página PHP que compruebe si el contenido de una variable es par o impar.
Para ello realiza un formulario que pida un número. */

$numero = 16;

if ($numero == 0){
    echo "el numero es 0";
} elseif ($numero % 2 == 0) {
    echo "el numero " . $numero . " es par";
} else {
    echo "el numero " . $numero . " es impar";
}

?>