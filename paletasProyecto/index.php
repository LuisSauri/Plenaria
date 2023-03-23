<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_login.css">

    <title>Iniciar sesión - Heladitos Gourmet</title>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
    <form class="border shadow p-3 rounded" style="width: 450px;" action="php/check-login.php" method="post">
        <h1 class="text-center p-3">Iniciar sesión</h1>

        <?php if (isset($_GET['error'])) { ?>
        <div class="alert alert-danger" role="alert">
            <?=$_GET['error']?>
        </div>
        <?php } ?>
        <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Ingrese su correo electrónico">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su contraseña">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Ingresar</button>
        </div>
        <br>
        <div class="text-center">
            <p>¿Eres nuevo usuario?</p><a href="nueva_cuenta.php">Crear cuenta nueva</a>
        </div>
    </form>
    </div>
</body>
</html>