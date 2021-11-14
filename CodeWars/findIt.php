<?php

/* Se trata de devolver el número que aparezca un número impar de veces en el array que se pasa por parámetro */

function findIt(array $seq) : int
{
    // Creamos un array para los número repetidos
    $contadorRepetidos = [];
    /*
    1. Comprobamos que el valor, si existe en el array, a la clave le sumas uno, es decir:
        si el número 1 aparece 2 veces, a la clave 1, la segunda vez le suma ++.
    2. Si no existe, lo insertas en el array con valor uno.
    */ 
    foreach($seq as $valor){
        if(array_key_exists($valor, $contadorRepetidos)){
            $contadorRepetidos[$valor]++;    
        }else{
            $contadorRepetidos[$valor] = 1;
        }
    }
    // Por cada valor del contador, lo dividimos entre 2, si el resto da 1, es impar.
    foreach($contadorRepetidos as $clave => $valor){
        if( $valor%2 == 1){
            return $clave;
        }
    }
    return null;
}
print_r(findIt([20,1,-1,2,-2,3,3,5,5,1,2,4,20,4,-1,-2,5]));
print_r(findIt([1,1,2,-2,5,2,4,4,-1,-2,5]));
print_r(findIt([20,1,1,2,2,3,3,5,5,4,20,4,5]));
print_r(findIt([10]));
print_r(findIt([1,1,1,1,1,1,10,1,1,1,1]));