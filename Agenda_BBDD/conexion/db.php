<?php 
class Database{

    // Credenciales
    private $host = 'localhost';
    private $db_name = 'agenda';
    private $username = 'postgres';
    private $password = 'root';

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