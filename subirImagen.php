<?php
require("includes/conexion.php");

if (isset($_FILES['imagen']['tmp_name']) && 
is_uploaded_file($_FILES['imagen']['tmp_name'])) {
    $imagen_array = getimagesize($_FILES['imagen']['tmp_name']);
    $imagen_cargada = file_get_contents($_FILES['imagen']['tmp_name']);
    $imagen_cargada = addslashes($imagen_cargada);
    
    $sql = "INSERT INTO imagenes (ancho, altura, tipo, imagen, nombre) VALUES 
    ('".$imagen_array[0]."', '".$imagen_array[1]."', '".$_FILES['imagen']['type']."', '".$imagen_cargada."', '".$_FILES['imagen']['name']."')";
    
    $conn = conectar(); 
    $r = mysqli_query($conn, $sql);
    
    echo ($r) ? "Datos insertados" : "Error al insertar";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Imagen</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="imagen" id="">
        <input type="submit" value="Subir">
    </form>
</body>
</html>
