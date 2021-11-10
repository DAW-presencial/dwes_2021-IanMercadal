<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tablas de Multiplicar</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <div style="margin-top: 30px; display:flex">

        <?php

        // Declaramos los valores con los que vamos a operar

        $indice = 10;
        $multiplicando = 10;

        // En mi caso creo de primeras la fila, a pesar de poder hacerlo con un bucle

        echo "<table border = 2>";

        echo "<th> Tablas </th>";
        echo "<th> 1 </th>";
        echo "<th> 2 </th>";
        echo "<th> 3 </th>";
        echo "<th> 4 </th>";
        echo "<th> 5 </th>";
        echo "<th> 6 </th>";
        echo "<th> 7 </th>";
        echo "<th> 8 </th>";
        echo "<th> 9 </th>";
        echo "<th> 10 </th>";

        // Creamos la primera columna con los correspondientes números

        for ($i = 1; $i <= $multiplicando; $i++) {
            echo "<tr>";

            echo "<td>";
            echo $i ;
            echo "</td>";

            // Multiplicamos el número que queremos y añadimos los resultados a la fila

            for ($j = 1; $j <= $indice; $j++) {
                echo "<td>";
                echo $j * $i;
                echo "</td>";
            }

            echo "</tr>";
        }
        echo "</table>";

        // Cerramos tablas
        ?>
    </div>

</body>
</html>