<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_login.css">

    <title>Nueva cuenta - Heladitos Gourmet</title>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
    <form class="border shadow p-3 rounded" style="width: 450px;" action="php/check-new-account.php" method="post">
        <h1 class="text-center p-3">Crear nueva cuenta</h1>
        <?php
         include "conexion.php";         
         ?>
        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Ingrese su nombre">
        </div>
        <div class="mb-3">
            <label for="Apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="Apellido" name="Apellido" placeholder="Ingrese su apellido">
        </div>
        <div class="mb-3">
            <label for="Correo" class="form-label">Correo electrónico</label>
            <input type="text" class="form-control" id="Correo" name="Correo" placeholder="Ingrese su correo electrónico">
        </div>
        <div class="mb-3">
            <label for="Contraseña" class="form-label">Contraseña</label>
            <input type="text" class="form-control" id="Contraseña" name="Contraseña" placeholder="Ingrese su contraseña">
        </div>
        <div class="mb-3">
            <label for="Fec_nacimiento" class="form-label">Fecha de nacimiento</label>
            <input type="date" class="form-control" id="Fec_nacimiento" name="Fec_nacimiento" placeholder="Ingrese su fecha de nacimiento">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary boton" value="btnregistrar" name="btnregistrar">Crear nueva cuenta</button>
        </div>
        <br>
        <div class="text-center">
            <p>¿Ya tienes una cuenta?</p><a href="index.php">Iniciar sesión</a>
        </div>
    </form>
    </div>
</body>
</html>