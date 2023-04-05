<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Fab App - @yield('titre')</title>

    <!-- Style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" />
</head>
<body>
    <!-- Header -->    
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('accueils.index') }}">La Fabuleuse Application</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex align-items-center">
                <li class="nav-item">
                <a class="nav-link d-flex" href="{{ route('usagers.index') }}"><span class="material-symbols-rounded">manage_accounts</span>Gestion usager</a>
                </li>
                <li class="nav-item">
                <a class="nav-link d-flex" href="{{ route('campagnes.index') }}"><span class="material-symbols-rounded">campaign</span>Gestion campagne</a>
                </li>
                <li class="nav-item">
                <a class="nav-link d-flex" href="{{ route('produits.index') }}"><span class="material-symbols-rounded">laundry</span>Gestion produits</a>
                </li>
                <li class="nav-item">
                <a class="nav-link d-flex" href="{{ route('paniers.index') }}"><span class="material-symbols-rounded">shopping_cart</span>Panier</a>
                </li>
                <li class="nav-item">
                <a class="nav-link d-flex" href="{{ route('profils.index') }}"><span class="material-symbols-rounded">taunt</span>Profil</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <!-- Contenu -->  
    @yield('contenu')

     <!-- Footer -->  

     <!-- Scripts -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>