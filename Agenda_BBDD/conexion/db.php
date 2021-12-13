<?php 
class Database{

    // Credenciales

    // El usuario actualmente es el de Brais debido a que yo todavía no tengo
    private $host = 'g1.ifc33b.cifpfbmoll.eu';
    private $db_name = 'bvirlan_db';
    private $username = 'bvirlan_usr';
    private $password = 'abc123.';

    // Conectar

    public function getConnection(){

        try{
            $conn = new PDO("pgsql:host=" . $this->host . ";port=5432" . ";dbname=" . $this->db_name, $this->username, $this->password);
        }catch(PDOException){
            echo "Connection error: ";
        }
        return $conn;
    }
}