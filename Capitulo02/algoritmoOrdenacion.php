<?php
    function ordenar(){

        // Creamos un array en el que vamos a almacenar los valores insertados por pantalla

        $array = [];

        echo "<h2>Introduce 5 números</h2> \n";

        // Los números pedidos por pantalla se almacenarán en su respectiva variable

        $primero = (int)readline('Introduce el primer integer: ');
        $segundo = (int)readline('Introduce el segundo integer: ');
        $tercero = (int)readline('Introduce el tercero integer: ');
        $cuarto = (int)readline('Introduce el cuarto integer: ');
        $quinto = (int)readline('Introduce el quinto integer: ');

        array_push($array,$primero,$segundo, $tercero,$cuarto,$quinto); // Insertamos los valores en el array

        $longitud = count($array); // Medimos la longitud del array

        // Mejorar redacción de la lógica
            
        for($i = 0; $i< $longitud; $i++){ // Creamos la variable i y debe de ser menor que el array
            for($j = 0; $j < $longitud -1; $j++){ // Cramos la variable j, que nos permite ver el numero de iteraciones
                if($array[$j] > $array[$j+1]){  // Si j número es mayor a j +1(número de la derecha) entra y realiza esto:

                    // Creamos k, como número j con su respectivo valor en el array.
                    $k = $array[$j];

                    // Realizamos un intercambio de valores, en el que j pasa a tener el valor del número de la derecha del que estamos comparando.
                    $array[$j] = $array[$j+1]; 
                    
                    // En esta parte, k pasaría a estar en la posición del número de su derecha al ser mayor
                    $array[$j +1] = $k;
                }
            }  
        }
        var_dump($array);
    }
ordenar();
