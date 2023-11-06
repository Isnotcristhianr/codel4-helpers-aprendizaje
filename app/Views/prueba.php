<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>

    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Css Local -->
    <link rel="stylesheet" href="../assets/css/estilo.css">
</head>

<body>

    <center>
        <div class="col-4 card text-center m-4 p-3 bg-body-secondary">
            <!-- Form -->
            <form method="GET" enctype="multipart/form-data" action="<?php echo base_url().'recibirdatos' ?>">
                <div class="mb-3">
                    <h4>Formulario</h4>
                </div>
                <div class="mb-3">
                    <label for="nameform" class="form-label">Nombre</label>
                    <input type="text" class="form-control text-center bg-success-subtle" name="nameform" placeholder="Ingrese su nombre" required>
                </div>
                <div class="mb-3">
                    <label for="cedulaform" class="form-label">Cedula</label>
                    <input type="text" id="cedula" class="form-control text-center bg-success-subtle" name="cedulaform"placeholder="Ingrese su Cedula" maxlength="10" required
                    onkeyup="validador()">
                </div>
                <div class="mb-3">
                    <label for="dateform" class="form-label">Fecha Nacimiento</label>
                    <input type="date" class="form-control text-center bg-success-subtle" name="dateform"placeholder="Ingrese su Fecha de Nacimiento" required>
                </div>
                <button type="submit" id="estiloBtn">Enviar</button>
            </form>

        </div>
    </center>



</body>

<!-- JS -->

<!-- Boostrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<!-- JS local -->
<script src="../assets/js/fun.js"></script>

</html>