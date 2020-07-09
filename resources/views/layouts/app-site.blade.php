<!DOCTYPE html>
<html lang="fr">
<head>
    {!! Meta::toHtml() !!}
    <!--meta charset="utf-8"-->
    <title>Dev Passion Academy</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!--meta content="" name="keywords">
    <meta content="" name="description"-->
    <!--meta_tags-->

    <!-- Favicons -->
    <link href="{{asset('images/favicon.png')}}" rel="icon">
    <link href="{{asset('images/favicon.png')}}" rel="apple-touch-icon">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">


    <!-- Main Stylesheet File -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>

<body id="page-top">
<header style="position: relative">
    <!--/ Nav Star /-->
    <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll" href="#page-top">
                DevPassionAcademy
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                    aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link js-scroll active" href="#home">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="#about">A Propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="#service">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="#work">Réalisations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="#contact">Contactez-nous</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--/ Nav End /-->
</header>
<section style="position: relative">
    @yield('content')
</section>

<!-- JavaScript Libraries -->
<script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
@yield('script')


</body>
</html>
