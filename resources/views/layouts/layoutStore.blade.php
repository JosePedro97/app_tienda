<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CON YIELD IMPRIMIMOS LOS TITULOS DE LAS OTRAS VIEWS--->
    <title>myStore - @yield('title')</title>
    <link rel="shortcut icon" href="images/shop-solid.svg">
    <!--BOOSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <header>
        <!--NAVBAR-->
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">myStore <i class="fa-solid fa-shop"></i></a>
                <ul class="navbar-nav nav justify-content-end">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user  fa-xl"></i>             
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Iniciar Sesión</a></li>
                            <li><a class="dropdown-item" href="#">Registrarse</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disable" href="#">   </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping fa-xl"></i></a>
                    </li>
                </ul>
                </div>
                </div>
            </div>
        </nav>
    </header>
    <!--CONTENIDO-->
    <section>
    <!--CON YIELD IMPRIMIMOS EL CONTENIDO DE LAS OTRAS VIEWS--->
    @yield('content')
    </section>
    <!--PIE DE PAGINA-->
    <footer>
    <nav class="navbar navbar-expand-l fixed-bottom navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="nav-link disabled">Compra en linea y recibe el mismo diá <i class="fa-solid fa-bolt"></i> <i class="fa-solid fa-truck"></i></a>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link disabled">Contactanos:</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fa-brands fa-whatsapp"></i></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fa-brands fa-twitter"></i></a>
                </li>
            </ul>
        </div>
    </nav>
    </footer>
    <!--BOOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--SWEETALERT2-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--FONTAWESOME-->
    <script src="https://kit.fontawesome.com/301664ec81.js" crossorigin="anonymous"></script>
</body>
</html>