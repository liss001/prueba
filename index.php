<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin: 10px;
            box-shadow: 2px 2px 10px #aaa;
        }
        .card img {
            max-width: 100%;
            border-radius: 5px 5px 0 0;
        }

    </style>
</head>
<body>
    <?php
    include("cabecera.php");
    require("includes/funciones.php");
    include("pie.php");

    
    $valores = listar();
    ?>

    <div class="container">
        <?php 
        foreach ($valores as $valor) { ?>
            <div class="card">
            <img src="src\persona.png" alt="Imagen genérica">
                <h2>
                  <?php echo htmlspecialchars($valor['nombre']);
                   ?>
                </h2>
                <p>Apellido: 
                  <?php echo htmlspecialchars($valor['apellido']);?>
                </p>
                <p>Teléfono: 
                  <?php echo htmlspecialchars($valor['telefono']); 
                  ?>
                </p>
            </div>
        <?php } ?>
    </div>
</body>
</html>
