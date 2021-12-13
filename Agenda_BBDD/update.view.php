<?php
include "conexion/db.php";

// Primero realizaremos el post para ver la lista actualizada
if ($_POST) {

    try {
        $db = new Database();
        $conn = $db->getConnection();

        // Esta parte es crucial, no insertará bien los datos como nombre si no lleva comillas
        $id = $_POST['id'];
        $usuario = $_POST['usuario'];
        $telefono = $_POST['telefono'];

        // La variable nombre lleva comillas para poder ser insertado
        $query = "UPDATE contactos set usuario = '$usuario' , Telefono = $telefono where id = $id";

        $stmt = $conn->prepare($query);
        $stmt->execute();

        echo "Usuario actualizado correctamente";
    } catch (PDOException) {
        echo "Algo no ha salido bien";
    }
}
?>
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
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Mohave:wght@300;500;700&family=Raleway:wght@100;400;700&family=Roboto+Condensed:wght@700&family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <div class="contenedor">
        <div class="titulo"><h1>Actualizar</h1></div>
        <hr class="border">

        <div class="contenido">
            <article>
                <?php

                // Llamamos a la bbdd para mostrar los datos actualizados
                $db = new Database();
                $conn = $db->getConnection();

                $query = "SELECT * FROM contactos ";
                $stmt = $conn->prepare($query);
                $stmt->execute();

                $num = $stmt->rowCount();

                if ($num > 0) {
                    // FETCH_ASSOC nos devolvera un array indexado con los datos
                    echo "<ul>";
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                        echo "<li class='contactos'> <p>{$id}" . ". " . "{$usuario}" . " " . "{$telefono}</p></li>";
                    }
                    echo "</ul>";
                }
                ?>
                <form class="formulario" method="POST">
                    <label>Id</label>
                    <input type="number" name="id">
                    <br>
                    <label>Nombre</label>
                    <input type="text" name="usuario">
                    <br>
                    <label>Teléfono</label>
                    <input type="number" name="telefono" value="telefono">
                    <br>
                    <input type="submit">
                </form>

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