<?php

$get = $_GET ['pares'];


if($get){
    for ($i = 1; $i < (rand(5,99)); $i++){
        if ($i%2==0) {
            echo $i." ♠ ";
        }
    }
}else {
    for ($i = 1; $i < (rand(5,99)); $i++){
        if ($i%2==1) {
            echo $i." ♠ ";
        }
    }
}