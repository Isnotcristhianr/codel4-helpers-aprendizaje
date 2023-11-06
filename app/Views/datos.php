<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Css Local -->
    <link rel="stylesheet" href="../assets/css/estilo.css">
</head>

<body>

    <!-- tarjeta del usuario -->
    <center>
        <div class="card m-5 p-2 shadow " style="width: 18rem;">
            <img src="https://definicion.de/wp-content/uploads/2019/07/perfil-de-usuario.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Hola!</h5>
                <p class="card-text text-primary fw-bold">
                    <?php
                    echo "Nombre: " . $nombre . "<br>";
                    echo "Cedula: " . $cedula . "<br>";
                    echo "Fecha Nacimiento: " . $fecha . "<br>";
                    echo "Año: " . $anio . "<br>";
                    echo "Biciesto: " . $biciesto . "<br>";
                    ?>
                </p>
            </div>
        </div>
    </center>


</body>
<!-- JS -->

<!-- Boostrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</html>