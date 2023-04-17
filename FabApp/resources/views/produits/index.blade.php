@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-xl-6 offset-xl-5 mt-5">
            <h1>Liste des produits</h1>

            <a href="{{route('produits.create')}}"><button class="btn btn-success">Ajouter un produit</button></a>
            <button class="btn btn-danger">Supprimer un produit</button>
            <button class="btn btn-warning">Ajouter un produit</button>

        </div>
    </div>
    
</div>
@endsection