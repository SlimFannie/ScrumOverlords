@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')
<div class="container-fluid">
    <div class="row">
        <div class="col">
           <form method="post" id="FormUsager" >
                @csrf
                <label for="prenom"> Indiquez votre prénom </label>
                <br>
                <input type="text" id="prenom" name="prenom">
                <br>
                <label for="nom"> Indiquez votre nom </label>
                <br>
                <input type="text" id="nom" name="nom">
                <br>
                <label for="courriel"> Indiquez votre adresse courriel </label>
                <br>
                <input type="text" id="courriel" name="adresseCourriel">
                <br>
                <label for="mdp"> Indiquez votre mot de passe </label>
                <br>
                <input type="text" id="mdp" name="motDePasse">
                <br>
                <button type="submit" class="btn btn-success" id="btnSubmit"> Confirmer </button>
           </form>
        </div>
    </div>
</div>
@endsection