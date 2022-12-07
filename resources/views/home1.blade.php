<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        @vite(['resources/js/app.js', 'resources/css/app.scss'])
        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
            <header class="header">
                <nav class="navbar navbar-expand-lg bg-dark barra">
                    <div class="container-fluid gap-5">
                        <a class="navbar-brand" href="/"><img class="logo" src="LOGO.png" alt="logoGamerFest"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-light opcionesNav">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Calendario</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Posiciones</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Juegos</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Normativas</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Noticias</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Contactos</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Patrocinadores</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <a class="btn btn-outline-success" href="/login">Iniciar Sesion</a>
                        </form>
                        </div>
                    </div>
                </nav>
                <div id="carouselExampleControls" class="carousel slide slider" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="img/slider1.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="img/slider2.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="img/slider3.jpeg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
            </header>
    </body>
</html>
