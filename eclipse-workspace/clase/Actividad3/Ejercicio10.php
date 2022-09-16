<?php

$num = $_GET['numero'];


function primo($numeroTotal) {
    $cont=0;
    for($i=1;$i<=$numeroTotal;$i++){
        if($numeroTotal%$i==0)
            $cont++;
    }
    if ($cont<=2)
        return $numeroTotal;
}

for ($i = 1; $i <= $num; $i++) {
    echo primo($i)."<br>";
}



?>