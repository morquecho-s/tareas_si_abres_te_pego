<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Información de domicilio</h1>
        <ul>
        <?php
            $direccion = $_POST["direccion"];
            $num_exterior = $_POST["num_exterior"];
            $num_interior = $_POST["num_interior"];
            $ciudad = $_POST["ciudad"];
            $estado = $_POST["estado"];
            $codigo_postal = $_POST["codigo_postal"];
            $pais = $_POST["pais"];

            echo "<li> direccion: $direccion </li>";
            echo "<li> numero exterior:  $num_exterior </li>";
            echo "<li> numero interior: $num_interior </li>";
            echo "<li> estado: $estado </li>";
            echo "<li> codigo postal: $codigo_postal </li>";
            echo "<li> pais: $pais </li>";

            

        ?>
        </ul>
    </body>
</html>