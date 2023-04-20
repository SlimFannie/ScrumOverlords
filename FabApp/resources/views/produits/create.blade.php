@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')
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
@endsection