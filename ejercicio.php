<?php
if (isset($_POST['nombre'])) {
    $nombre = 'galleta';
    $valor = $_POST['nombre']."|".$_POST['password'];
    $fecha = time() + (60 * 60 * 24);
    setcookie($nombre, $valor, $fecha);
}
else {
    $recordar="";
}
/*$usuario = "";
$contrasena = "";

if (isset($_COOKIE['galleta'])) {
    $datos = $_COOKIE['galleta'];
    $datos_array = explode("|", $datos);
    $usuario = $datos_array[0];
    $contrasena = $datos_array[1];
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="nombre">Usuario:</label>
        <input type="text" 
        name="nombre" id="">
        <p>
            <?php
            if(isset($_COOKIE
            ['galleta'])){
               $datos=$_COOKIE['galleta'];
               $datos_array=explode("|",$datos);
               $usuario=$datos_array[0];
               $contrasena=$datos_array[1];
               $recordar="on";
            }
            ?>
        </p>
        <label for="password">Contraseña:</label>
        <input type="password" 
        name="password" id="" value="<?php
        echo ($recordar=="on")?$contrasena:"";?>">
        <label for="">Recor:</label>
        <input type="checkbox"
        name="recordar" <?php
        if ($recordar=='on')echo 'checked'?>>
    
        <input type="submit"
         value="Enviar">
    </form>
</body>
</html>
