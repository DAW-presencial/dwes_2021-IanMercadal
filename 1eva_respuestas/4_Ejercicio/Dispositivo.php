<?php
class Dispositivo{
    public string $nombre;
    private $codigo;

    // Creación del constructor
    public function __construct(string $nombre)
    {
        $this -> nombre = $nombre;
    }
    // En este punto, la hiha hereda de padre
    public function __get($propiedad){
        if(property_exists($this, $propiedad)) {
            return $this->$propiedad;
        }
    }

    public function __set($propiedad, $valor){
        if(property_exists($this, $propiedad)) {
            $this->$propiedad = $valor;
        }
    }
}
// 
class Tablet extends Dispositivo{
    public int $RAM;

    public function __construct(string $nombre, int $RAM)
    {
        $this -> RAM = $RAM;
        parent::__construct($nombre);
    }
}

$padre = new Dispositivo('Television');
echo('Dispositivo, televisión que clase padre');
echo "<br>";

$padre->__set('codigo', 8080);
echo('codigo: '.$padre->__get('codigo'));
echo "<br>";

$hija = new Tablet('Huawei', 2);
echo('Tablet clase hija de Dispositivo');
echo "<br>";

$hija->__set("codigo", 6666);
echo('codigo: '.$hija->__get("codigo"));
echo "<br>";
echo('RAM: '.$hija->__get("RAM"));

// Tanto la clase padre como la hija pueden usar __get() sin la necesidad de definirlas en la clase hija Tablet.
?>