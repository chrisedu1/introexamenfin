<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet"/> 
</head>
<body>
    <h1>Examen final</h1>
    <h1>Tabla de alumnos</h1>
 <?php

    $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
    $conexion = new PDO('mysql:host=localhost;dbname=final_0907_23_15408', 'root', '', $pdo_options);

    $select = $conexion->query("SELECT carnet, nombre, grado, telefono FROM alumno");

    ?>

     <table border="1">
        <thead class="nc">
            <tr class="columnas">
                <th>Carnet</th>
                <th>Nombre</th>
                <th>Grado</th>
                <th>Teléfono</th>
              
            </tr>
        </thead>
        <tbody class="dc">
            <?php foreach($select->fetchAll() as $alumno) { ?>
                <tr>
                    <td> <?php echo $alumno["carnet"] ?></td>
                    <td> <?php echo $alumno["nombre"] ?></td>
                    <td> <?php echo $alumno["grado"] ?></td>
                    <td> <?php echo $alumno["telefono"] ?></td>
                   
                </tr>
                <?php } ?>
        </tbody>
    </table>
    
</body>
</html>