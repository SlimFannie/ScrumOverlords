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
                                <h1 id="typeUn"></h1>
                                <p id="ligneUn" class="d-none">Vous êtes <?php echo Session::get('prenom'), ' ', Session::get('nom') ?></p>
                                <img src=""></img>
                                <h3 id="typeDeux"></h3>
                                <p id="ligneDeux" class="d-none">Votre adresse courriel est <?php echo Session::get('adresseCourriel') ?></p>
                                <br>
                                <a type="button" class="btn bg-btn" href="{{ route('profils.edit') }}">Modifier mon profil</a>
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