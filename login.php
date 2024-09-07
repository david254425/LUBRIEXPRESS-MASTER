<!DOCTYPE html>
<html lang="en">

<head>
    <title>LubriExpress</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none"
                        href="lubriexpress@gmail.com">lubriexpress@gmail.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none"
                        href="tel:2634-522248 - 2634-346714">2634-522248 - 2634-346714</a>
                </div>
                <div>
                    <a class="text-light" href="https://fb.com/lubriexpress" target="_blank" rel="sponsored"><i
                            class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/lubriexpress" target="_blank"><i
                            class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/lubriexpress" target="_blank"><i
                            class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.php">
                LUBRIEXPRESS
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between"
                id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">Sobre nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.php">Tienda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal"
                        data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="carrito.php">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        <span
                            class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->
    
     <!-- Modal -->
     <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Buscar ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- Open Form -->
    <div class="container">
        <div class="abs-center">
          <form action="login.php" id="form" class="border p-3 form" method="POST" name="login_user">
            <div class="form-group">
              <label for="text">Usuario</label>
              <input type="text" name="usuario" id="usuario" placeholder="Solo letras y numeros" class="form-control"
              required autocomplete="on" 
              onkeypress="return (
              (event.charCode >= 48 && event.charCode <= 57)
              || 
              (event.charCode >= 65 && event.charCode <= 90)
              || 
              (event.charCode >= 97 && event.charCode <= 122))" minlength="5" maxlength="16"/>
            </div>
            <div class="form-group">
              <label for="password">Contraseña</label>
              <input type="password" name="password" placeholder="Solo letras y numeros" id="password" class="form-control"
              required autocomplete="on" onkeypress="return (
              (event.charCode >= 48 && event.charCode <= 57)
              || 
              (event.charCode >= 65 && event.charCode <= 90)
              || 
              (event.charCode >= 97 && event.charCode <= 122))" minlength="8" maxlength="16"/>
            </div>
            <div class="form-group" style="width: 300px;">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="mx-auto" style="width: 100px;" for=exampleCheck1>Recordar</label>
            </div>
            <div class="form-group" style="width: 300px;">
                <a class="mx-auto" style="width: 100px;" href="register.php" for=exampleCheck1>Registrar</a>
            </div>
          <div>  <button type="submit" class="btn btn-primary">Login</button></div>     
          </form>
        </div>
      </div>
<!-- Close Form -->
<!-- Start Footer -->
<footer class="bg-dark" id="tempaltemo_footer">
    <div class="container">
        <div class="row">

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-success border-bottom pb-3 border-light logo">LubriExpress</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li>
                        <i class="fa fa-phone fa-fw"></i>
                        <a class="text-decoration-none" href="tel:2634-522248 - 2634-346714">2634-522248 -
                            2634-346714</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope fa-fw"></i>
                        <a class="text-decoration-none" href="lubricentro@gmail.com">lubriexpress@gmail.com</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-light border-bottom pb-3 border-light">Marcas</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none" href="https://www.shell.com/">SHELL</a></li>
                    <li><a class="text-decoration-none" href="https://www.bardahl.com/">BARDAHL</a></li>
                    <li><a class="text-decoration-none" href="https://www.liquimoly.com/">LIQUI MOLY</a></li>
                    <li><a class="text-decoration-none" href="https://www.ypf.com/">YPF</a></li>
                </ul>
            </div>
        </div>
        <div class="row text-light mb-4">
            <div class="col-12 mb-3">
                <div class="w-100 my-3 border-top border-light"></div>
            </div>
            <div class="col-auto me-auto">
                <ul class="list-inline text-left footer-icons">
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a rel="nofollow" class="text-light text-decoration-none" target="_blank"
                            href="http://fb.com/lubriexpress"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank"
                            href="https://www.instagram.com/lubriexpress"><i
                                class="fab fa-instagram fa-lg fa-fw"></i></a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank"
                            href="https://twitter.com/lubriexpress"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="w-100 bg-black py-3">
        <div class="container">
            <div class="row pt-2">
                <div class="col-12">
                    <p class="text-left text-light">
                        Copyright &copy; 2023 LUBRIEXPRESS
                        | Hecho por Ferreyra Ignacio y Gonzalez David
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->
<!-- Start Script -->
<script src="assets/js/jquery-1.11.0.min.js"></script>
<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/templatemo.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/login.js"></script>
<!-- End Script -->
</body>