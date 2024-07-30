<?php
function conectar(){
   $conn = mysqli_connect("localhost","root","","tecnologia2");
   if(!$conn){
    echo "error en la conexion".
    mysqli_connect_error();
   }
   echo "conexion exitosa";
   return $conn;
}

?>