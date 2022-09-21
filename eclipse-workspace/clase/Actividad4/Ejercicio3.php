<?php
$descuento = 90;
$array = [
    [
        'Producto1' => 'Air Max plus 3',
        'Producto2' => 'Air Max 270',
        'Producto3' => 'Air Jordan 1',
        'Producto4' => 'Air max Plus',
        'Producto5' => 'Air Max 1 negras'
    ],
    [
        'Precio1' => '179€',
        'Precio2' => '149€',
        'Precio3' => '100€',
        'Precio4' => '139€',
        'Precio5' => '100€'
    ],
    [
        'Precio1' => '179' * $descuento / 100 . '€',
        'Precio2' => '149' * $descuento / 100 . '€',
        'Precio3' => '100' * $descuento / 100 . '€',
        'Precio4' => '139' * $descuento / 100 . '€',
        'Precio5' => '100' * $descuento / 100 . '€'
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