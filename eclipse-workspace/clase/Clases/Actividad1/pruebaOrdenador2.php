<?php 

include ("Ordenador.php");

$ordenadoresArray = array(new ordenador('Ubuntu 20.24','HZ11111',true), new ordenador('Windows 14','HZ222222',false), 
    new ordenador('Windows 10','HZ333333',true), new ordenador('Linux mint','HZ44444',false));
   
    foreach ($ordenadoresArray as $x){
        echo $x->print();
    }

?>