<?php
class Conexion{
    private $host = "aws-0-us-west-1.pooler.supabase.com";
    private $db_name= "postgres";
    private $username = "postgres.zmasyfhaybtsbvumsuhu";
    private $password = "KarinaKevinGerson";
    public $conn;

    public function getConnection(){
        $this->conn = null;
        try{
            $this->conn = new PDO("pgsql:host=".$this->host. ";dbname=".$this->db_name, $this->username,$this->password);
            
        }catch(PDOException $exception){
            echo "Connection error: ".$exception->getMessage();
        }
        return $this->conn;
    }


}


?>