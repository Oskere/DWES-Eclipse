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