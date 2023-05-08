@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')

<div class="container-fluid h-100 g-0 retroBG" id="videoFrame">
    <video id="videoBG" autoplay muted loop src="{{ asset('img/WithoutRobotSynthwave1.mp4') }}" class="d-none d-lg-block"></video>
    <div class="container-fluid d-flex align-items-center justify-content-center h-100 g-0 d-col">
        <div class="row g-0 pb-2">
            <div class="card text-white bg-card text-center p-2 mt-5">
                <div class="container-fluid card-body g-0">
                    <form method="post" id="FormUsager" class="text-center" action="{{route('usagers.store')}}">
                        @csrf
                        <div class="row g-0">
                            <div class="col-lg-6 col-xl-12 pe-0 pe-lg-2 pe-xl-0">
                                <label for="prenom" class="form-label"> Prénom </label>
                                <input type="text" id="prenom" name="prenom" class="form-control" required>
                                <br>
                                <div class="d-block d-lg-none d-xl-block">
                                    <label for="nom" class="form-label"> Nom </label>
                                    <input type="text" id="nom" name="nom" class="form-control" required>
                                </div>
                                <div class="d-none d-lg-block d-xl-none">
                                    <label for="courriel" class="form-label"> Adresse courriel </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="felix.antoine.desrochers.boisjoli.02" aria-describedby="courrielCegep">
                                        <span class="input-group-text" id="courrielCegep">@edu.cegeptr.qc.ca</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-12 ps-0 ps-lg-2 ps-xl-0">
                                <div class="d-none d-lg-block d-xl-none">
                                    <label for="nom" class="form-label"> Nom </label>
                                    <input type="text" id="nom" name="nom" class="form-control" required>
                                </div>
                                <div class="d-block d-lg-none d-xl-block pt-3">
                                    <label for="courriel" class="form-label"> Adresse courriel </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="felix.antoine.desrochers.boisjoli.02" aria-describedby="courrielCegep">
                                        <span class="input-group-text" id="courrielCegep">@edu.cegeptr.qc.ca</span>
                                    </div>
                                </div>
                                <br>
                                <label for="mdp" class="form-label"> Mot de passe </label>
                                <input type="text" id="mdp" name="motDePasse" class="form-control" required>
                            </div>
                        </div>
                        <div class="row g-0 pt-4">
                            <div class="col-12">
                                <button type="submit" class="btn bg-btn align-items-center" id="btnSubmit"><h5 class="fontLogo d-inline">Rejoindre&nbsp<i class="fa-solid fa-bolt icon-flicker"></i></h5></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection