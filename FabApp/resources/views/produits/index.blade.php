@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')
<div class="container-fluid mt-5">
    <div class="row text-center">
    <h1>Liste des produits</h1>
        <div class="col mt-5">
            <form method="post" action="{{ route('produits.supprimer')}}">
                @csrf
                <select name="typeProduit">
                @if(count($produits))
                    @foreach($produits as $produit)
                        <option value="{{$produit->nomProduit}}">{{$produit->nomProduit}}</option>
                    @endforeach
                @endif
                </select>
        </div>
    </div>
    <div class="row text-center">
        
        <div class="col-xl-6 offset-xl-3 mt-5">

            
            <button type="submit" class="btn btn-danger">Supprimer un produit</button>
            </form>
            <a href="{{route('produits.create')}}"><button class="btn btn-success">Créer un nouveau produit</button></a>
            <button class="btn btn-warning">Modifier un produit</button>

        </div>
    </div>
            
    
    
</div>
@endsection