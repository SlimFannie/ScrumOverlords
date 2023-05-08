@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')
<div class="container-fluid h-100 g-0 retroBG" id="videoFrame">
    <!-- <video id="videoBG" autoplay muted loop src="{{ asset('img/WithoutRobotSynthwave1.mp4') }}" class="d-none d-lg-block"></video> -->
    <div class="container-fluid d-flex align-items-center justify-content-center h-100 g-0 d-col">
        <div class="row g-0 pb-2">
            <div class="card text-white bg-card text-center p-2">
                <div class="card-body">
                    <form method="post" id="FormUsager" action="{{ route('usagers.login') }}" >
                            @csrf
                            <label for="courriel" class="form-label"> Adresse courriel </label>
                            <br>
                            <input type="text" class="form-control" id="courriel" name="adresseCourriel">
                            <br>
                            <label for="mdp" class="form-label"> Mot de passe </label>
                            <br>
                            <input type="text" class="form-control" id="mdp" name="motDePasse">
                            <br>
                            <button type="submit" class="btn bg-btn" id="btnSubmit"><h5 class="fontLogo m-0">Enter dans la boutique <i class="fa-solid fa-door-closed fa-hover-hidden"></i><i class="fa-solid fa-door-open fa-hover-show"></i></h5></button>
                    </form>
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection