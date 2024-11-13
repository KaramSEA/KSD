<?php

function dividir($decimal1,$decimal2=1){
    if ($decimal2==0) {
        return false;
    }else {
        return $decimal1/$decimal2;
    }
}

function concatenar(...$strings){
    foreach ($strings as $value) {
        echo "$value, ";
    }
}


