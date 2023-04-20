@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')
<<<<<<< HEAD
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
=======
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
>>>>>>> db9c61ddce634e0f165341cf24c2d08dd85de1dd
@endsection