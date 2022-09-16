<?php

/* Define la constante PI y calcula el perímetro y superficie de un círculo cuyo radio es de 5cm. Guarde como ejercicio03.php */

    $radio = 5;
    
    echo "El perimetro de un circulo con un radio de 5cm es: " . ($radio * 2 * pi()) . " cm<br>Y la superficie es: " . (pi() * ($radio * $radio)) . " cm^2";