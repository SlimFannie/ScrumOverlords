@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')
<div class="container-fluid h-100 g-0" id="videoFrame">
    <video id="videoBG" autoplay muted loop src="{{ asset('img/WithoutRobotSynthwave.mp4') }}"></video>
    <div class="container-fluid d-flex align-items-center justify-content-center h-100 g-0 d-col">
        <div class="row g-0 pb-2">
            <div class="card text-white bg-card text-center p-2">
                <div class="card-body">
                    <h3 class="fontLogo">Fabuleuse connexion</h3>
                    <form method="post" id="FormUsager" >
                            @csrf
                            <label for="courriel"> Adresse courriel </label>
                            <br>
                            <input type="text" id="courriel" name="adresseCourriel">
                            <br>
                            <label for="mdp"> Mot de passe </label>
                            <br>
                            <input type="text" id="mdp" name="motDePasse">
                            <br><br>
                            <button type="submit" class="btn bg-btn" id="btnSubmit"> Confirmer </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection