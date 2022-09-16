<?php
/* Tengo un billete de avión para Denver definir la variable dataSalida (fecha y hora). Necesito que el programa que calcule tiempo me falta para coger dicho avión, dependiendo de la hora actual.*/

$fecha1= new DateTime();
$fecha2= DateTime::createFromFormat("Y-m-d H:i","2022-11-23 15:41");
$diff = $fecha1->diff($fecha2);

echo "<h3>El vuelo sale en: ";
echo $diff->format('%a Dias , %h horas y %i minutos');
echo "<h3>";

?>