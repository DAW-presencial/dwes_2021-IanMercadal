<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $primero =($_POST['primero']);
    $segundo =($_POST['segundo']);
    $tercero =($_POST['tercero']);
    $cuarto =($_POST['cuarto']);
    $quinto =($_POST['quinto']);

    $array = [];
    $errores = [];

    if(!$primero){
        $errores[] = "Añade el primer número";
    }
    if(!$segundo){
        $errores[] = "Añade el segundo número";
    }
    if(!$tercero){
        $errores[] = "Añade el tercer número";
    }
    if(!$cuarto){
        $errores[] = "Añade el cuarto número";
    }
    if(!$quinto){
        $errores[] = "Añade el quinto número";
    }

    foreach ($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>

        </div>
    <?php endforeach;

    if(empty($errores)){
        $a = array_push($array,$primero,$segundo, $tercero,$cuarto,$quinto);

        $longitud = count($array); // Medimos la longitud del array
            
        for($i = 0; $i< $longitud; $i++){ // Creamos la variable i y ha de ser menor que el array
            for($j = 0; $j < $longitud -1; $j++){ // Cramos la variable j 
                if($array[$j] > $array[$j+1]){  // Si j número es mayor a j +1(número de la derecha)
                    $k = $array[$j]; // Creamos k, como número temporal, que vamos a comparar con el número de la derecha
                    $array[$j] = $array[$j+1]; // Realizamos un intercambio de valores si es mayor
                    $array[$j +1] = $k;
                }
            }  
        }
        print_r($array);
    }
}
?>

        
<div>
    <form method="POST" action="algoritmoOrdenacion.php">
    <h2>Inserta los números deseados</h2>
    <label>Primer número: <input type="number" name="primero" /></label><br />
    <label>Segundo número: <input type="number" name="segundo" /></label><br />
    <label>Tercer número: <input type="number" name="tercero" /></label><br />
    <label>Cuarto número: <input type="number" name="cuarto" /></label><br />
    <label>Quinto número: <input type="number" name="quinto" /></label><br />

    <input type="submit" name="submit" value="Insertar"><br />

    </form>

</div>