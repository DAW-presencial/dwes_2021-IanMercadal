<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mohave:wght@300;500;700&family=Raleway:wght@100;400;700&family=Roboto+Condensed:wght@700&family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <div class="contenedor">
        <div class="titulo"><h1>Agenda</h1></div>
        <hr class="border">

        <div class="contenido">
        <article>
            <?php
            include "conexion/db.php";

            try{
                // Creamos la instancia para que haga la conexión
                $db = new Database();
                $conn = $db->getConnection();
        
                // Creamos los querys a insertar
                $query = "SELECT * FROM contactos ";
                $stmt = $conn->prepare($query);
                $stmt->execute();
        
                // Esta variable mostrara el numero de filas de la bbdd
                $num = $stmt->rowCount();
        
                // Mientras tengamos filas, las mostrara
                if($num > 0){
                    echo "<ul>";
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                        extract($row);
                        echo "<li class='contactos'> <p>{$id}" . ". " . "{$usuario}". " " . "{$telefono}</p></li>";
                    }
                    echo "</ul>";
                }
            }
            catch(PDOException) {
                echo "No hay resultados";
            }
            ?>
                <br>
            <a href="contenido.view.php" class="link-boton">Agenda</a>
            <a href="create.view.php" class="link-boton">Crear</a>
            <a href="delete.view.php" class="link-boton">Eliminar</a>
            <a href="update.view.php" class="link-boton">Actualizar</a>
        </article>
        </div>
    </div>
</body>

</html>