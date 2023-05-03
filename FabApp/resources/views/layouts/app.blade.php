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

    <!-- Fonts et icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sedgwick+Ave+Display&family=Titillium+Web&display=swap" rel="stylesheet">
    
</head>
<body>
    <!-- Header -->    
    <div class="container-fluid g-0 d-front">
    <nav class="navbar navbar-expand-lg navbar-dark bg-nav px-5 w-100">
        
            <a class="navbar-brand fontLogo" href="{{ route('accueils.index') }}">Département d'informatique</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="col-6">
                    @auth
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex align-items-center">
                        <?php if (Session::get('id') != 2) { ?>
                        <li class="nav-item">
                        <a class="nav-link d-flex" href="{{ route('usagers.index') }}"><span class="material-symbols-rounded">manage_accounts</span>Gestion usager</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link d-flex" href="{{ route('campagnes.index') }}"><span class="material-symbols-rounded">campaign</span>Gestion campagne</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link d-flex" href="{{ route('produits.index') }}"><span class="material-symbols-rounded">laundry</span>Gestion produits</a>
                        </li>
                        <?php } ?>
                    </ul>
                    @endauth
                </div>
                <div class="col-6 text-end">
                    <ul class="navbar-nav mb-2 mb-lg-0 d-flex align-items-center">
                        @auth
                            <li class="nav-item fontLogo"><?php echo 'Bonjour ', Session::get('prenom'), ' ', Session::get('nom')?></li>
                            <li class="nav-item">
                            <a class="nav-link d-flex" href="{{ route('paniers.index') }}"><span class="material-symbols-rounded">shopping_cart</span>Panier</a>
                            </li>    
                            <li class="nav-item">
                            <a class="nav-link d-flex" href="{{ route('profils.index') }}">Profil<span class="material-symbols-rounded">cottage</span></a>
                            </li>
                            <form method="POST" action="{{ route('usagers.logout') }}">
                            @csrf
                                <li class="nav-item">
                                    <button type="submit" class="bg-deco nav-link d-flex">Se déconnecter<span class="material-symbols-rounded">waving_hand</span></button>
                                </li>
                            </form>
                        @else
                            <li class="nav-item">
                                <a class="nav-link d-flex" href="{{ route('usagers.create') }}">Créer un compte<span class="material-symbols-rounded">waving_hand</span></a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link d-flex" href="{{ route('usagers.showLoginForm') }}">Se connecter<span class="material-symbols-rounded">taunt</span></a>
                            </li>
                        @endauth
                    </ul>
                </div>
        
    </nav>
    </div>
    
    @if(Session::has('error'))
        <div class="alert alert-danger mt-2">{{ Session::get('error')}}</div>
    @endif
    <!-- Contenu -->  
    @yield('contenu')

     <!-- Footer -->  

     <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>