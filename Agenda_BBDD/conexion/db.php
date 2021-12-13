<?php 
class Database{

    // Credenciales

    // El usuario actualmente es el de Brais debido a que yo todavía no tengo
    private $host = '51.178.152.213';
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