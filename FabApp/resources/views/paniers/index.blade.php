@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')
<div class="container-fluid h-100 g-0 retroBG" id="videoFrame">
    <div class="container-fluid d-flex align-items-center justify-content-center h-100 g-0 d-col">
        <div class="row g-0 pb-2">
            <div class="col-12 border-flicker">
                <div class="card text-white bg-card text-center w-100" id="cardFrame">
                    <div class="card-body">
                        <h1>Panier de <?php echo Session::get('prenom') ?></h1>
                        <ul class="p-0 m-0">
                        @if (count($produits))
                            @foreach ($produits as $produit)
                                <li>{{ $produit->quantite }}x{{ $produit->nomProduit}}</li>
                            @endforeach
                        @else
                            <div class="w-100"><h5 class="d-inline">Votre panier est vide</h5><span class="loading"></span></div>
                            <i class="fa-regular fa-face-sad-tear fa-xl pt-4"></i>
                        @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection