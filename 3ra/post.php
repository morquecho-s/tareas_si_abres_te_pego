<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="./style.css">
    <link rel='stylesheet' href='./cdn-uicons.flaticon.com_uicons-solid-rounded_css_uicons-solid-rounded.css'>
    <!-- <META HTTP-EQUIV="Refresh" CONTENT="0; URL=/redirect_location"> -->
</head>

<body>
    <main>
        <h1>Tabla de productos</h1>
        <h2>Morquecho Soto Sergio Manuel</h2>
        <table>
            <thead>
                <th>ID</th>
                <th>Articulo</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>null</th>
            </thead>
            <tbody>
                <?php
                    $num_filas = $_POST['num_filas'];
                    foreach (range(1, $num_filas) as $num_fila){
                        echo "
                            <tr>
                                <th>0x0$num_fila</th>
                                <th>tacos de sal</th>
                                <th>255$</th>
                                <th>5</th>
                                <th><button><i class='fi fi-sr-shopping-cart-add'></i></button></th>
                            </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>
    </main>
</body>

</html>