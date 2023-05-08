<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Fab App - @yield('titre')</title>

    <!-- Style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate.css/animate.min.css') }}"/>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sedgwick+Ave+Display&family=Titillium+Web&display=swap" rel="stylesheet">
    
</head>
<body>
    <!-- Header -->    
    <div class="container-fluid w-100 g-0 d-front">
        <div class="row text-center g-0">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg justify-content-center navbar-dark bg-nav animate__animated animate__lightSpeedInLeft">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <img src="{{ asset('img/logoDept.png') }}" height="50vh"></img>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center pt-3 pt-lg-0" id="navbarSupportedContent">
                    <a class="navbar-brand d-none d-lg-block d-xl-block d-xxl-block fontLogo" href="{{ route('accueils.index') }}"><img src="{{ asset('img/logoDept.png') }}" height="50vh"></img> &nbspDépartement d'informatique</a>
                        <ul class="navbar-nav d-flex align-items-center ">
                            @auth
                            <?php if (Session::get('id') != 2) { ?>
                            <li class="nav-item">
                            <a class="nav-link hover-underline-animation" href="{{ route('usagers.index') }}"><span class="material-symbols-rounded">manage_accounts</span>Gestion usager</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link hover-underline-animation" href="{{ route('campagnes.index') }}"><span class="material-symbols-rounded">campaign</span>Gestion campagne</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link hover-underline-animation" href="{{ route('produits.index') }}"><span class="material-symbols-rounded">laundry</span>Gestion produits</a>
                            </li>
                            <?php } ?>
                            <li class="nav-item">
                                <i class="fa-solid fa-cart-shopping fa-lg"></i><a class="nav-link hover-underline-animation" href="{{ route('paniers.index') }}">Panier</a>
                            </li> 
                            <li class="nav-item">
                                <i class="fa-regular fa-id-badge fa-lg"></i><a class="nav-link hover-underline-animation" href="{{ route('profils.index') }}">Profil</a>
                            </li>
                            <li class="nav-item">
                                <h3 class="d-inline"><?php echo 'Bonjour ', Session::get('prenom')?></h3>
                            </li>
                            <li class="nav-item">
                                <form method="POST" action="{{ route('usagers.logout') }}">
                                @csrf
                                    <li class="nav-item">
                                        <button type="submit" class="bg-deco nav-link hover-underline-animation">Déconnexion</button><i class="fa-solid fa-hand-peace"></i>
                                    </li>
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
                                <a class="nav-link hover-underline-animation" href="{{ route('usagers.showLoginForm') }}">Connexion</a><i class="fa-solid fa-hand-peace fa-lg icon-flicker"></i>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/59d2871224.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>