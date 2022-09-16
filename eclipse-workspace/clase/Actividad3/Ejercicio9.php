<?php

$get = $_GET ['primo'];

$cont=0;
for($i=1;$i<=$get;$i++){
    if($get%$i==0)
        $cont++;
}
if ($cont<=2)
    echo $get . " es primo";
else   
    echo $get . " no es primo";