@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-4 offset-xl-4 mt-3">
            <div class="container-fluid h-100 g-0" id="videoFrame">
            <video id="videoBG" autoplay muted loop src="{{ asset('img/WithoutRobotSynthwave1.mp4') }}"></video>
            <div class="container-fluid d-flex align-items-center justify-content-center h-100 g-0 d-col">
                <div class="row g-0 pb-2">
                    <div class="col-12">
                        <div class="card text-white bg-card text-center d-none d-lg-block d-xl-block d-xxl-block" id="cardFrame">
                            <div class="card-body">
                                <form method="post" id="FormUsager" class="text-center" action="{{ route('profils.update') }}">
                                    <label for="mdp"> Nouveau mot de passe </label>
                                    <br>
                                    <input type="text" id="mdp" name="motDePasse">
                                    <br>
                                    <label for="mdpCon"> Confirmation du mot de passe </label>
                                    <br>
                                    <input type="text" id="mdpCon" name="motDePasseCon">
                                    <br><br>
                                    <label for="imgProfil">Nouvelle image de profil:</label>
                                    <input type="text" class="form-control" id="imgProfil" placeholder="image.jpg ou .png" name="img">
                                    <br>
                                    <button type="submit" class="btn bg-btn d-inline-flex align-items-center" id="btnSubmit"> Confirmer&nbsp <i class="fa-solid fa-bolt fa-lg icon-flicker"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
    
</div>
@endsection