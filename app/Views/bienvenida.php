<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h1>Bienvenidos</h1>
    </center>
    <form method="GET" action="<?php echo base_url() . '/index.php/pepito'; ?>">
        <label>Nombre:</label>
        <input type="text"  name="nombre" value="" required>
        <input type="text" maxlength="10" onkeyup="verificar()" onkeypress="return validador(event)" name="cedula" id="cedula" required placeholder="Cédula:">
        <input id="btnEnviar" type="submit" value="Enviar" style="display: none;">
    </form>
    <br>
    <div id="evaCed" style="display: none;">
        <center><button onclick="separarJS()" >Evaluación inicial</button></center>
    </div>
</body>

    <footer>
        <script src="<?php echo base_url(); ?>../assets/js/funciones.js"></script>
    </footer>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>