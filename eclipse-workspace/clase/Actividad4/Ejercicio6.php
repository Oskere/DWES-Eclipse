<?php

$array = array(0=>rand(0,99),1=>rand(0,99),2=>rand(0,99),3=>rand(0,99),4=>rand(0,99),5=>rand(0,99),6=>rand(0,99),7=>rand(0,99),8=>rand(0,99),9=>rand(0,99));
$media=0;

for ($i = 1; $i < count($array); $i++) {
        $media=$media + $array[$i];
}
$media= $media / count($array);
echo $media;
?>