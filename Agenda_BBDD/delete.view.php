<?php
include "conexion/db.php";

if ($_POST) {

    try {
        $db = new Database();
        $conn = $db->getConnection();

        $id = $_POST['id'];
        $query = "DELETE from contactos where id = {$id} ";

        $stmt = $conn->prepare($query);
        $stmt->execute();

        echo "Usuario eliminado correctamente";
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
    <link href="https://fonts.googleapis.com/css2?family=Mohave:wght@300;500;700&family=Raleway:wght@100;400;700&family=Roboto+Condensed:wght@700&family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <div class="contenedor">
    <div class="titulo"><h1>Eliminar</h1></div>
        <hr class="border">

        <div class="contenido">
            <article>
                <?php
                $db = new Database();
                $conn = $db->getConnection();

                $query = "SELECT * FROM contactos ";
                $stmt = $conn->prepare($query);
                $stmt->execute();

                $num = $stmt->rowCount();

                if ($num > 0) {
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
                    <input type="submit">
                </form>

                <br>
            <a href="contenido.view.php" class="link-boton">Agenda</a>
            <a href="create.view.php" class="link-boton">Crear</a>
            <a href="delete.view.php" class="link-boton">Eliminar</a>
            <a href="update.view.php" class="link-boton">Actualizar</a>
        </div>
        </article>
    </div>

</body>

</html>