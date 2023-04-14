@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')

<div class="container-fluid h-100 g-0" id="videoFrame">
    <video id="videoBG" autoplay muted loop src="{{ asset('img/WithoutRobotSynthwave.mp4') }}"></video>
    <div class="container-fluid d-flex align-items-center justify-content-center h-100 g-0 d-col">
        <div class="row g-0 pb-2">
            <div class="card text-white bg-card text-center p-2">
                <div class="card-body">
                <h3 class="fontLogo">Rejoins la Fabuleuse Application!</h3>
                    <form method="post" id="FormUsager" class="text-center" action="{{route('usagers.store')}}">
                        @csrf
                        <label for="prenom"> Prénom </label>
                        <br>
                        <input type="text" id="prenom" name="prenom">
                        <br>
                        <label for="nom"> Nom </label>
                        <br>
                        <input type="text" id="nom" name="nom">
                        <br>
                        <label for="courriel"> Adresse courriel DU CÉGEP* </label>
                        <br>
                        <input type="text" id="courriel" name="adresseCourriel">
                        <br>
                        <label for="mdp"> Mot de passe </label>
                        <br>
                        <input type="text" id="mdp" name="motDePasse">
                        <br>
                        <label for="role"> Mot de passe </label>
                        <br>
                        <input type="text" id="role" name="role">
                        <br><br>
                        <button type="submit" class="btn bg-btn d-inline-flex align-items-center" id="btnSubmit"> Confirmer <span class="material-symbols-rounded">electric_bolt</span></button>
                    </form>
                    <br>
                    <p>*Tu dois absolument entrer une adresse courriel du Cégep valide.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection