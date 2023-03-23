<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    
    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet">

    <title>Home - Heladitos Gourmet</title>
</head>
<body>
    <!-- Top -->
    <header>
        <div class="container-fluid bg-primary py-3 d-none d-md-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                        <div class="d-inline-flex align-items-center">
                            <a class="text-white px-3" href="">Ayuda</a>
                            <span class="text-white">|</span>
                            <a class="text-white pl-3" href="">Soporte</a>
                        </div>
                    </div>
                    <div class="col-md-6 text-center text-lg-right">
                        <div class="d-inline-flex align-items-center">
                            <a class="text-white px-3" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-white px-3" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-white px-3" href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="text-white pl-3" href="">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "navbar.php" ?>
    </header>

    <!-- Espacio de videos -->
         <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <video class="img-fluid" width="1920" height="1080" autoplay loop muted>
                        <source src="https://assets.mixkit.co/videos/preview/mixkit-neapolitan-flavor-ice-cream-in-detail-18329-large.mp4" type="video/mp4" />
                    </video>
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Ver información sobre</h4>
                            <h1 class="display-3 text-white mb-md-4">PRODUCTOS</h1>
                            <a href="productos.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Ver más...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="carousel-inner">
        <div class="carousel-item active">
            <video class="img-fluid" width="1920" height="1080" autoplay loop muted>
                <source src="https://assets.mixkit.co/videos/preview/mixkit-ice-cream-cones-seen-in-great-detail-18316-large.mp4" type="video/mp4" />
            </video>
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h4 class="text-white text-uppercase mb-md-3">Ver historial de</h4>
                    <h1 class="display-3 text-white mb-md-4">VENTAS</h1>
                    <a href="ventas.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Ver más...</a>
                </div>
            </div>
        </div>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <video class="img-fluid" width="1920" height="1080" autoplay loop muted>
                <source src="https://assets.mixkit.co/videos/preview/mixkit-processing-ice-creams-from-a-factory-21798-large.mp4" type="video/mp4" />
            </video>
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h4 class="text-white text-uppercase mb-md-3">Ver acceso de</h4>
                    <h1 class="display-3 text-white mb-md-4">USUARIOS</h1>
                    <a href="usuarios.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Ver más...</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="container-fluid footer bg-light py-5" style="margin-top: 90px;">
        <div class="container text-center py-5">
            <div class="row">
                <div class="col-12 mb-4">
                    <a href="index.html" class="navbar-brand m-0">
                        <h1 class="m-0 mt-n2 display-4 text-primary"><span class="text-secondary">Heladitos</span>Gourmet</h1>
                    </a>
                </div>
                <div class="col-12 mb-4">
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-youtube"></i></a>
                </div>
                <div class="col-12 mt-2 mb-4">
                    <div class="row">
                        <div class="col-sm-6 text-center text-sm-right border-right mb-3 mb-sm-0">
                            <h5 class="font-weight-bold mb-2">Sede Principal</h5>
                            <p class="mb-2">Av. Central Barrio de Santa Ana </p>
                            <p class="mb-2">Campeche, Campeche, México</p>
                            <p class="mb-0">+52 981 234 5678</p>
                        </div>
                        <div class="col-sm-6 text-center text-sm-left">
                            <h5 class="font-weight-bold mb-2">Horas de servicio</h5>
                            <p class="mb-2">Lunes – Sábado, 10 AM – 6PM</p>
                            <p class="mb-0">Domingo: Cerrado</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <p class="m-0">&copy; <a href="#">UNID</a>. Todos los derechos reservados. Materia: <a href="">Programación Estructurada</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>