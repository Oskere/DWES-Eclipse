<?php

$nombre1="bruno";
$nombre2="adolfo";
$apellido1="mars";
$apellido2="vazquez";
$dni1="11111111a";
$dni2="11111111b";

$array = [
    [
        'Nombre' => $nombre1,
        'Apellido' => $apellido1,
        'Correo' => $dni1,
    ],
    [
        'Nombre' => $nombre2,
        'Apellido' => $apellido2,
        'Correo' => $dni2,
    ]
];


$tabla = '<table border="1">';
foreach ( $array as $r ) {
    $tabla .= '<tr>';
    foreach ( $r as $v ) {
        $tabla .= '<td>'.$v.'</td>';
    }
    $tabla .= '</tr>';
}
$tabla .= '</table>';

echo $tabla;
?>