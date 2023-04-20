@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')
<<<<<<< HEAD
<div class="container-fluid mt-5">
    <div class="row text-center">
        <h1>Page ajout de produits</h1>
        <form method="post" id="FormProduits" class="text-center" action="{{route('produits.store')}}">
        @csrf
            <div class="row">
                <div class="col mt-5">
                    <input type="text" placeholder="Indiquez le nom du produit" name="nomProduit">
                </div>
            </div>
            <div class="col-2 offset-4 mt-5">
                @if(count($tailles))
                    @foreach($tailles as $taille)
                        <p>{{$taille->detail}}</p> 
                        <input type="checkbox">
                    @endforeach
                @endif
            </div>

            <div class="col-2  mt-5">
                @if(count($couleurs))
                    @foreach($couleurs as $couleur)
                        <p>{{$couleur->detail}}</p> <input type="checkbox">
                    @endforeach
                @endif
            </div>
            <button class="btn btn-success">Ajouter un produit</button>
        </form>
    </div>
</div>
=======
<div class="container-fluid h-100 g-0" id="videoFrame">
    <video id="videoBG" autoplay muted loop src="{{ asset('img/WithoutRobotSynthwave1.mp4') }}"></video>
    <div class="container-fluid d-flex align-items-center justify-content-center h-100 g-0 d-col">
        <div class="row g-0 pb-2">
            <div class="col-12">
                <div class="card text-white bg-card" id="cardFrame">
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
        <div class="row gx-5 pt-5">
            <div class="col text-center ">
                <a href="{{route('produits.create')}}"><button class="btn btn-success">Ajouter un produit</button></a>
            </div>
        </div>
    </div>
</div> 
>>>>>>> db9c61ddce634e0f165341cf24c2d08dd85de1dd
@endsection