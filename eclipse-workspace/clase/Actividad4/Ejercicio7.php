<?php
$array = array(0=>rand(0,200),1=>rand(0,200),2=>rand(0,200),3=>rand(0,200),4=>rand(0,200),5=>rand(0,200),6=>rand(0,200),7=>rand(0,200),8=>rand(0,200),9=>rand(0,200));

echo 'Relación de números aleatorios<br>';
for ($i = 0; $i < count($array); $i++) {
    echo $array[$i].' ';
};
echo '<br>Otra forma de visualizar los datos del array<br>';
print_r($array);
echo '<br>Relación de números al reves<br>';
for ($i = count($array)-1; $i >= 0; $i--) {
    echo $array[$i].' ';
};
?>