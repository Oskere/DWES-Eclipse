<?php

$get = $_GET ['Param1'];
$get2 = $_GET ['Param2'];
$resto = 0;
for ($get; $get <= $get2; $get++) {
    $resto = ($resto + $get);
}
echo $resto;