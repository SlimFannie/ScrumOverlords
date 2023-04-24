@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')
<div class="container-fluid h-100 g-0" id="videoFrame">
    <video id="videoBG" autoplay muted loop src="{{ asset('img/WithoutRobotSynthwave1.mp4') }}"></video>
    <div class="container-fluid d-flex align-items-center justify-content-center h-100 g-0 d-col">
        <div class="row g-0 pb-2">
            <div class="col-12">
                <div class="card text-white bg-card" id="cardFrame">
                    <div class="card-body">
                        <h3>Liste des produits</h3>
                        <br>
                        <form method="post" action="{{ route('produits.supprimer')}}">
                        @csrf
                        @if (count($produits))
                        <table>
                            @foreach ($produits as $produit)
                                <tr>
                                    <td>{{ $produit->nomProduit }}</td>
                                    <td>Nb réservations</td>
                                    <td>Nb achat</td>
                                    <td>Taille</td>
                                    <td>Couleurs</td>
                                </tr>
                            @endforeach
                        </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row gx-5 pt-5">
            <div class="col text-center">
                <button class="btn btn-danger">Supprimer un produit</button>
            </div>
            </form>
            <div class="col text-center ">
                <a href="{{route('produits.create')}}"><button class="btn btn-success">Créer un nouveau produit</button></a>
            </div>
            <div class="col text-center">
                <button class="btn btn-warning">Modifier un produit</button>
            </div>
        </div>
    </div>
</div> 
@endsection