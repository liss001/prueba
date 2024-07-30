<?php
//insertar
require("conexion.php");

function insertar($nombre, $apellido, $telefono) {
    $conn = conectar();
    $sql = "insert into usuario (nombre, apellido, telefono) V 
    ('".$nombre."', '".$apellido."', '".$telefono."')";
    mysqli_query($conn, $sql);
    echo(mysqli_affected_rows($conn) > 0) ? "Datos insertados" : "Error al insertar";
}

function listar() {
    $conn = conectar();
    $sql = "select * from usuario";  
    $r = mysqli_query($conn, $sql);
    $datos = [];
    while ($fila = mysqli_fetch_assoc($r)) {
        $datos[] = $fila;
    }
    return $datos;
}

/*function listar(){
    global $conn;
    $sql="select * from usario";
    $r=mysqli_query($conn,$sql);
    $datos=mysqli_fetch_assoc($r);
    return $datos;
} */
?>


