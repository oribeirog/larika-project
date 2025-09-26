<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/css/default.css" rel="stylesheet" />

        <title>Larika</title>
    </head>

    <body>


        
        <nav class="navbar navbar-expand-lg navbar-light">

            <div class="container-fluid">

                <a class="navbar-brand">
                    <img src="./img/ham-ico-64.png" alt="" width="32" height="32">
                    Larika
                </a>

                <button class="navbar-toggler" type="button" 
                    data-bs-toggle="collapse" data-bs-target="#navbarMain">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarMain">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home Page</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="menuLink"
                            data-bs-toggle="dropdown">Cardapio</a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#">Hamburguer</a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="#">Hot Dog</a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="#">Batatas Recheadas</a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="#">Petiscos</a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="#">Bebidas</a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </div>

            </div>

        </nav>

        <div id="carouselControls" class="carousel slide" data-bs-ride="carousel">
            
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/hamburger-h500.png" alt="" class="d-block">

                </div>

                <div class="carousel-item active">
                    <img src="./img/hamburger-h500.png" alt="" class="d-block">

                </div>

                <div class="carousel-item">
                    <img src="./img/hotdog-h500.png" alt="" class="d-block">

                </div>

                <div class="carousel-item">
                    <img src="./img/potato-h500.png" alt="" class="d-block">

                </div>

                <div class="carousel-item">
                    <img src="./img/snacks-h500.png" alt="" class="d-block">

                </div>

            </div>

            <button class="carousel-control-prev" type="button" 
                data-bs-target="#carouselControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <button class="carousel-control-next" type="button" 
                data-bs-target="#carouselControls" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>

        </div>

        <main class="container p-3">

            <div class="row"> <!-- row = linha -->

                <div class="col"> <!-- col = column (coluna)-->
                    <div class="card text-white bg-warning">
                        <img class="card-img-top" src="./img/hamburger-cartoon-w358.png">
                    </div>
                    <div class="card-body">
                        <p class="card-text">Prove o hamburguer da casa.</p>
                    </div>

                </div>

                <div class="col"> <!-- col = column (coluna)-->
                    <div class="card text-white bg-warning">
                        <img class="card-img-top" src="./img/hotdog-cartoon-w358.png">
                    </div>
                    <div class="card-body">
                        <p class="card-text">Prove o Hot Dog da casa.</p>
                    </div>

                </div>

                <div class="col"> <!-- col = column (coluna)-->
                    <div class="card text-white bg-warning">
                        <img class="card-img-top" src="./img/potato-cartoon-w358.png">
                    </div>
                    <div class="card-body">
                        <p class="card-text">Prove as nossas batatas recheadas</p>
                    </div>

                </div>

                <div class="col"> <!-- col = column (coluna)-->
                    <div class="card text-white bg-warning">
                        <img class="card-img-top" src="./img/snacks-cartoon-w358.png">
                    </div>
                    <div class="card-body">
                        <p class="card-text">Prove os nossos petiscos.</p>
                    </div>

                </div>

            </div>
        </main>

        <footer class="text-warning bg-danger">
            <div class="container">
                <div class="row">
                    <div class="col" style="text-align: center;">
                        <img class="mb-2" src="./img/ham-ico-64.png" width="64" height="64" >
                        <span class="display-5">Larika</span>
                        <small class="d-block mb-3">&copy;2025</small>

                    </div>

                </div>
            </div>

        </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>