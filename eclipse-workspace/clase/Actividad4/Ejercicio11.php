<?php
$array =
    [
        'Lunes' => 2,
        'Martes' => 1,
        'Miercoles' => 16,
        'Jueves' => 14,
        'Viernes' => 15,
        'Sabado' => 17,
        'Domingo' => 91
    ];

print_r($array);
echo "<br><br><br>Media: ";
print_r((array_sum($array)/count($array)));
echo "<br>Suma: ";
print_r(array_sum($array));