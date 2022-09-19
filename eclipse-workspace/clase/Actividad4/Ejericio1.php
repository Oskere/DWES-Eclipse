<?php

$nombre1="bruno";
$nombre2="adolfo";
$apellido1="mars";
$apellido2="vazquez";
$dni1="11111111a";
$dni2="11111111b";
$r=0;
$v=0;
$array = array("Nombre" => $nombre1,"Nombre2" => $nombre2, "Apellido" => $apellido1,"Apellido2" => $apellido2, "DNI" => $dni1, "DNI2" => $dni2);

$s = '<table border="1">';
foreach ( $array as $r ) {
    $s .= '<tr>';
    foreach ( $r as $v ) {
        $s .= '<td>'.$v.'</td>';
    }
    $s .= '</tr>';
}
$s .= '</table>';

echo $s;

?>