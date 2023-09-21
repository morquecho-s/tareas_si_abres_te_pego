<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inclusive+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style2.css">
    
    <title>login</title>
</head>
<body>
    <main>
    <?php
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        echo "<h1>Usuario: $nombre</h1>";
        echo $email;
    ?>
        <h2>Ingresa tu domicilio</h2>
        <form action="fin.php" method="post" id="form">
            <label for="direccion">dirección</label>
            <input type="text" name="direccion" placeholder="ej. Marbella 319" id="direccion" class="field_text">
            <div>
                <label for="num_exterior">numero exterior</label>
                <input type="number" name = 'num_exterior' id = 'num_exterior' min="0">
                <label for="num_interior">numero interior</label>
                <input type="number" name = "num_interior" id="num_interior" min="0">
            
            </div>
            <label for="ciudad">ciudad</label>
            <input type="text" name="ciudad" id="ciudad" class="field_text" placeholder="ej. mexicali">
            
            <label for="estado">estado</label>
            <input type="text" name="estado" id="estado" class="field_text" placeholder="ej. baja california">
            <div>
                <label for="codigo_postal">codigo postal</label>
                <input type="number" name="codigo_postal" id="codigo_postal" min="0">
    
            </div>
            
            <label for="pais">pais</label>
            <input type="text" name="pais" id="pais" class="field_text" placeholder="ej. mexico">
            
            
            <hr>
            <input type="submit">

        </form>
    </main>
    
</body>
</html>