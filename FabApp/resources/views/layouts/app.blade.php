<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Fab App - @yield('titre')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sedgwick+Ave+Display&family=Titillium+Web&display=swap" rel="stylesheet">
    
    <!-- Style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate.css/animate.min.css') }}"/>
</head>
<body>
    <!-- Header -->    
    <div class="container-fluid w-100 g-0 d-front">
        <div class="row text-center g-0">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg justify-content-center navbar-dark bg-nav animate__animated animate__lightSpeedInLeft ">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <img src="{{ asset('img/logoDept.png') }}" height="50vh"></img>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center pt-3 pt-lg-0" id="navbarSupportedContent">
                    <img src="{{ asset('img/logoDept.png') }}" height="50vh" class="d-none d-lg-block d-xl-none"></img>
                    <a class="navbar-brand d-none d-xl-block d-xxl-block fontLogo" href="{{ route('accueils.index') }}"><img src="{{ asset('img/logoDept.png') }}" height="50vh"></img> &nbspDépartement d'informatique</a>
                        <ul class="navbar-nav d-flex align-items-center ">
                            @auth
                            <li class="nav-item ps-lg-4">
                                <a class="nav-link d-block d-xl-none" href="{{ route('accueils.index') }}">Page d'accueil</a>
                            </li>
                            <?php if (Session::get('id') != 2) { ?>
                            <li class="nav-item">
                                <div class="dropdown">
                                    <a class="nav-link dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Gestion
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-retro text-center p-0 m-0" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="nav-link hover-underline-animation" href="{{ route('usagers.index') }}">Usagers</a></li>
                                        <li><a class="nav-link hover-underline-animation" href="{{ route('campagnes.index') }}">Campagnes</a></li>
                                        <li><a class="nav-link hover-underline-animation" href="{{ route('produits.index') }}">Produits</a></li>
                                    </ul>
                                </div>
                            <?php } ?>
                            <li class="nav-item">
                                <i class="fa-solid fa-cart-shopping fa-lg d-inline d-lg-none d-xl-inline"></i><a class="nav-link hover-underline-animation" href="{{ route('paniers.index') }}">&nbspPanier</a>
                            </li> 
                            <li class="nav-item">
                                <i class="fa-regular fa-id-badge fa-lg d-inline d-lg-none d-xl-inline"></i><a class="nav-link hover-underline-animation" href="{{ route('usagers.indexProfil') }}">&nbspProfil</a>
                            </li>
                            <li class="nav-item py-sm-2 d-none d-lg-inline">
                                <h3 class="d-inline"><?php echo 'Bonjour ', Session::get('prenom')?></h3>
                            </li>
                            <li class="nav-item">
                                <form method="POST" action="{{ route('usagers.logout') }}" class="d-flex justify-content-center align-items-center">
                                @csrf
                                    <button type="submit" class="btn bg-deco nav-link fontResponsive hover-underline-animation">Déconnexion</button>&nbsp<i class="fa-solid fa-hand-peace fa-xl d-block d-lg-none d-xl-block"></i>
                                </form>
                            </li>
                            @else
                            <li class="nav-item d-lg-none">
                                <a href="{{ route('accueils.index') }}" class="navbar-brand m-0"><h5 class="fontLogo">Département d'informatique</h5></a>
                            </li>
                            <li class="nav-item">
                                <i class="fa-solid fa-arrow-right-long fa-lg shake"></i>&nbsp&nbsp<a class="nav-link hover-underline-animation" href="{{ route('usagers.create') }}">Créer un compte</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link hover-underline-animation" href="{{ route('usagers.showLoginForm') }}">Connexion&nbsp</a><i class="fa-solid fa-hand-peace fa-lg icon-flicker"></i>
                            </li>
                            @endauth
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    
    @if(Session::has('error'))
        <div class="alert alert-danger mt-2">{{ Session::get('error')}}</div>
    @endif
    <!-- Contenu -->  
    @yield('contenu')

     <!-- Footer -->  

     <!-- Scripts -->
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>
        <script src="https://kit.fontawesome.com/59d2871224.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>