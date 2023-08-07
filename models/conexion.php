<?php

class Conexion{

    private $conexion;

    public function __construct()
    {
        $this->conexion = new mysqli('localhost', 'root','','mvcbasicphp');
    }

    public function getUser(){
        $query = $this->conexion->query('SELECT * FROM clientes');

        $resultado = [];

        $i = 0;

        while ($fila = $query->fetch_assoc()) {
            $resultado[$i] = $fila;
            $i++;
        }

        return $resultado;
    }
}
?>