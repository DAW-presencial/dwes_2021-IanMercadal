<?php
if(empty($_POST)){
    echo "Inserta los datos";
}
else{ 
    foreach ($_FILES as $archivo => $infoArchivo){

        $error = $_FILES [$archivo]['error'];
        $name = $_FILES[$archivo]['name'];
        $tmp_name = $_FILES[$archivo]['tmp_name'];
        $file_size = $_FILES[$archivo]['size'];
        $upload_dir = __DIR__."/documentos//" .$name;

        if($error == UPLOAD_ERR_OK){
            move_uploaded_file($tmp_name,$upload_dir);
            echo "Tamaño de imagen: ";
            var_dump($file_size);
        }
        else{
            echo "No ha ido bien, vuelve a intentarlo";
        }
    }
    echo "Datos user: ";
    var_dump($_POST);
    
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
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Formulario</h1>

        <form method="POST" enctype="multipart/form-data">

            <label>Nombre: <input type="text" name="nombre"></label>
            <br>
            <label>Apellido: <input type="text" name="apellido"></label>
            <br>
            <label>Fecha de nacimiento <input type="date" name="fecha"></label>
            </label>
            <br>
            <label>Sube un fichero</label>
            <input type="file" name="archivoSeleccionado" id="archivoSeleccionado" value="" />
            <input type="file" name="archivoSeleccionado2" id="archivoSeleccionado2" value="" />
            <br>
            <input type="submit" name="submit">
        </form>
    </body>
</html>