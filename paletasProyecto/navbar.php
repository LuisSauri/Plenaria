<?php 
    $sublevel = "./";
    if (isset($subPath)){
        $sublevel = $subPath;
    }
?>
<!-- Navbar -->
<header>
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
                <a href="<?php echo $sublevel ?>home.php" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-4 text-primary"><span class="text-secondary">Heladitos</span>Gourmet</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="<?php echo $sublevel ?>home.php" class="nav-item nav-link">Inicio</a>
                        <a href="<?php echo $sublevel ?>productos.php" class="nav-item nav-link active">Productos</a>
                    </div>
                    <a href="<?php echo $sublevel ?>home.php" class="navbar-brand mx-5 d-none d-lg-block">
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary">Heladitos</span>Gourmet</h1>
                    </a>
                    <div class="navbar-nav mr-auto py-0">
                        <a href="<?php echo $sublevel ?>ventas.php" class="nav-item nav-link">Ventas</a>
                        <a href="<?php echo $sublevel ?>usuarios.php" class="nav-item nav-link">Usuarios</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>