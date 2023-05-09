@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')
<div class="container-fluid h-100 g-0 retroBG" id="videoFrame">
    <div class="container-fluid d-flex align-items-center justify-content-center h-100 g-0 d-col">
        <div class="row g-0 pb-2">
            <div class="col-12">
                <div class="card text-white bg-card text-center" id="cardFrame">
                    <div class="card-body">
                        <h1>Panier de <?php echo Session::get('prenom') ?></h1>
                        <ul>
                        @if (count($produits))
                            @foreach ($produits as produit)
                                <li>{{ $produit->quantite }}x{{ $produit->nomProduit}}</li>
                            @endforeach
                        @else
                            <li>Votre panier est vide.</li>
                        @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection