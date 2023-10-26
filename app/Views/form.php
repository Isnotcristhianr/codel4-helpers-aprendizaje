<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <center>
        <h1>
            Datos Prueba
        </h1>
    </center>
    <div>
        <?php
        echo "Nombre: " . $nombre . "<br>";
        echo "Apellido: " . $apellido . "<br>";
        echo "Clave: " . $clave . "<br>";
        echo "Cedula: " .  $cedula . "<br>";

        echo "Tipo de Cedula: " . $caracteres[0] . "<br>";
        ?>
    </div>

</body>

</html>