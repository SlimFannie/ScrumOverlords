@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-4 offset-xl-4 mt-3">
            <div class="container-fluid h-100 g-0 " id="videoFrame">
            <div class="container-fluid d-flex align-items-center justify-content-center h-100 g-0 d-col retroBG">
                <div class="row g-0 pb-2">
                    <div class="col-12">
                        <div class="card text-white bg-card text-center" id="cardFrame">
                            <div class="card-body">
                                <h1>Vous êtes</h1>
                                <img src=""></img>
                                <h1 id="typeUn"></h1>
                                <p id="ligneUn" class="d-none"><?php echo Session::get('prenom'), ' ', Session::get('nom') ?></p>
                                <h3>Votre adresse courriel est</h3>
                                <h3 id="typeDeux"></h3>
                                <p id="ligneDeux" class="d-none"><?php echo Session::get('adresseCourriel') ?></p>
                                <br>
                                <a type="button" class="btn bg-btn" href="{{ route('profils.edit') }}"><h5 class="m-0 fontLogo">Modifier mon profil</h5></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection