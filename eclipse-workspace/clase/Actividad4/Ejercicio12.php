<?php
$array =
[
    'Ekain' => 'Ekain Lanchas',
    'Pablo' => 'Pablo Torres',
    'Javier' => 'Javier UwUtia',
    'Alex' => 'Alex Garcia',
    'Ender' => 'Ender Alberdi',
    'Oscar' => 'Oscar Alvarez',
];

ksort($array);
print_r($array);
echo "<br><br>";
natsort($array);
print_r($array);