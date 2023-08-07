<?php

    require 'models/conexion.php';

    $con = new Conexion();

    $usuarios = $con->getUser();
    

?>