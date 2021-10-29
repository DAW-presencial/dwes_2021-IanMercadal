<?php
// Crear clases

/* 
- Debemos crear una clase con unas propiedades privadas. las cuales solo se puede modificar unas pocas
- debemos crear un control de accesos
*/ 

class Personas{
     public  $nombre = "Ian";
     private  $edad = 19;
     private  $dni = "4444444F"; 
     protected  $sexo ="Masculino";
     
     
     public function __set($name,$value){
         switch($name){
            case "edad":
                $this->$name = $value;
            break;

            case "dni":
                $this->$name = $value;
            break;
            case "sexo":
                $this->$name = $value;
            break;

            default: NULL;
            break;
         }
     }

     public function __get($name){
        switch($name){

            case "edad": 
                return $this->$name;
            break;

            // case "dni":
            //     return $this->$name;
            // break;

            case "sexo":
                return $this->$name;
            break;

            default: return NULL;
                break;
        }
    }
}

$persona = new Personas;
$persona->raza = "4444";
var_dump($persona);
?>