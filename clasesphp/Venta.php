<?php

class Venta{
    private $conn;
    private $table_name = "venta";
    private $idVenta;
    private $dui_cliente;
    private $idmedi;
    private $cantidad;
    private $fecha;
    private $nmembresia;

    public function __construct($db){
        $this->conn = $db;
    }

    public function leer(){
        $query= "select vt.idventa,cl.nombre as nombrecliente,md.nombre as nombremedicamento,vt.cantidad,vt.fecha from venta vt inner join cliente cl on cl.dui=vt.dui_cliente inner join medicamentos md on vt.idmedi=md.idmedi";
        //$query="SELECT * FROM ".$this->table_name;
        $stmt=$this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }


}


?>