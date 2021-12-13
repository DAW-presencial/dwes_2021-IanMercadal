<?php
$host = "localhost";
$db_name = "1phpbeginnercrudlevel2";
$username = "root";
$password =  "root";

try{
    $con = new PDO ("mysql:host={$host};dbname={$db_name}",$username,$password);
}
catch(PDOException $exception){
    echo "Conexion fallida: " . $exception->getMessage();
}