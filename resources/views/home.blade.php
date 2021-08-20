<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYLTECH</title>
    <!--Fonte -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Script do Font awesome -->

    <!-- Progress bar-->

    <!--Parallax -->
    <script src="{{ asset('js/parallax.min.js') }}"></script>
</head>

<header>
        <div class="container" id="nav-container">
            <nav class="navbar navbar-expand-lg fixed-top">
                <a href="#" class="navbar-brand">
                    <img id="logo" src="{{ asset('img/simCMYK.png') }}" alt="hdc Agency">  <img id="logo2" src="{{ asset('img/lettcaCMYK.png') }}" alt="hdc Agency">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
          <div class="navbar-nav">
            <a class="nav-item nav-link" id="home-menu" href="#">Home</span></a>
            <a class="nav-item nav-link" id="about-menu" href="#">A agência</a>
            <a class="nav-item nav-link" id="services-menu" href="#">Serviços</a>
            <a class="nav-item nav-link" id="team-menu" href="#">Time</a>
            <a class="nav-item nav-link" id="portfolio-menu" href="#">Projetos</a>
            <a class="nav-item nav-link" id="contact-menu" href="#">Contato</a>
          </div>
        </div>
            </nav>

        </div>
    </header>

<script src="{{ asset('js/scripts.js') }}"></script>
</html>