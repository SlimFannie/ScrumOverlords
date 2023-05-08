@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')
<div class="container-fluid h-100 g-0 retroBG" id="videoFrame">
    <video id="videoBG" autoplay muted loop src="{{ asset('img/WithoutRobotSynthwave1.mp4') }}" class="d-none d-lg-block"></video>
    <div class="container-fluid d-flex align-items-center justify-content-center h-100 g-0 d-col">
        <div class="row g-0 pb-2">
            <div class="col-12">
                <div class="card text-white bg-card" id="cardFrame">
                    <div class="card-body text-center">
                    <h1>Page ajout de produits</h1>
                        <form method="post" id="FormProduits" class="text-center" action="{{route('produits.store')}}">
                        @csrf
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" placeholder="Indiquez le nom du produit" name="nomProduit">
                                    <br>
                                    <br>
                                    @if(count($tailles))
                                        @foreach($tailles as $taille)
                                            <label for="taille">{{$taille->detail}}</label>
                                            <input type="checkbox" id="taille" name="taille">
                                        @endforeach
                                    @endif
                                    <br>
                                    <br>
                                    @if(count($couleurs))
                                        @foreach($couleurs as $couleur)
                                            <label for="couleur">{{$couleur->detail}}</label>
                                            <input type="checkbox" name="couleur" id="couleur">
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="row gx-5 pt-5">
                                <div class="col text-center ">
                                    <button class="btn btn-success">Ajouter un produit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div> 
@endsection