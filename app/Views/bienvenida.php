<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <!-- bs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>


    <!-- msj bienvenida -->
    <center class="m-1">
        <h1>Bienvenido a mi sitio web</h1>
        <p>Esta es la pagina de bienvenida</p>
    </center>

    <!-- Formulario -->
    
    <form class="form m-2 text-center" action="<?php echo base_url("/form") ?>" method="GET" enctype="multipart/form-data">
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="text" name="apellido" placeholder="Apellido">
        <input type="password" name="clave" placeholder="clave">
        <br>
        <br>
        <label for="">Cedula: </label>
        <input type="text" name="cedula" id="cedula" maxlength="10">
        <br>
        <input class="btn btn-success m-2" type="submit" value="Enviar" name="enviar">

    </form>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>