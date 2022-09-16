<?php
/* Definir un número en una variable  y decir a qué nota le corresponde */


$nota = 9;

if ($nota < 5) {
    echo "suspenso";
} elseif ($nota < 6){
    echo "suficiente";
} elseif ($nota < 7){
    echo "bien";
} elseif ($nota < 9){
    echo "muy bien";
} elseif ($nota <=10){
    echo "sobresaliente";
}
?>