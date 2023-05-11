@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')
<div class="container-fluid g-0 h-100 retroBG" id="videoFrame">
    <div class="container-fluid h-100 d-flex align-items-center justify-content-center g-0 d-col">
        <div class="row g-0 pb-2">
            <div class="card text-white bg-card text-center">
                <div class="card-body border-flicker">
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
                            <button type="submit" class="btn bg-deco hover hover-underline-animation" id="btnSubmit"><h5 class="fontLogo text-white-50 m-0">Enter dans la boutique <i class="fa-solid fa-door-closed hoverHide"></i><i class="fa-solid fa-door-open hoverShow"></i></h5></button>
                    </form>
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection