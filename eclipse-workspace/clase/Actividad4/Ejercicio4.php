<?php

$array = array(0=>13,1=>23,2=>1,3=>10,4=>54,5=>100,6=>21,7=>32,8=>12,9=>3);
$mayor = $array[0];

for ($i = 1; $i < count($array); $i++) {
    if ($mayor < $array[$i]) {
        $mayor = $array[$i];
    }
}
echo $mayor;

?>