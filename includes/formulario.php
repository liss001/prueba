<?php
require_once("funciones.php");

$errores = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $telefono = $_POST["telefono"];

    $errores = validar($nombre, $apellido, $telefono);

    if (empty($errores)) {
        Insertar($nombre, $apellido, $telefono);
    }
}

function validar($nombre, $apellido, $telefono) {
    $errores = [];

    if (empty($nombre)) {
        $errores[] = "El nombre es obligatorio.";
    } elseif (strlen($nombre) < 20) {
        $errores[] = "El nombre  debe tener más de 20 caracteres.";
    }

    if (empty($apellido)) {
        $errores[] = "El apellido es obligatorio.";
    } elseif (strlen($apellido) < 20) {
        $errores[] = "El apellido  debe tener más de 20 caracteres.";
    }

    if (empty($telefono)) {
        $errores[] = "El teléfono es obligatorio.";
    } elseif (strlen($telefono) != 8) {
        $errores[] = "El teléfono debe tener exactamente 8 caracteres.";
    } elseif (!ctype_digit($telefono)) {
        $errores[] = "El teléfono solo debe contener números.";
    }

    return $errores;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inserción</title>
</head>
<body>
    <form action="" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required>
        <br>
        
        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required>
        <br>

        <input type="submit" value="Insertar">
    </form>

    <?php
    if (!empty($errores)) {
        echo '<ul>';
        foreach ($errores as $error) {
            echo '<li>' . htmlspecialchars($error) . '</li>';
        }
        echo '</ul>';
    }
    ?>
</body>
</html>
