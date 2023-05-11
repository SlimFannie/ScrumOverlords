@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')
<div class="container-fluid h-100 g-0 w-100 retroBG" id="videoFrame">
    <div class="container-fluid d-flex justify-content-center h-100 g-0 d-col">
        <div class="row g-0 pb-2 w-100 d-flex justify-content-center">
            <div class="col-12 w-50 border-flicker">
                <div class="card text-white bg-card" id="cardFrame">
                    <div class="card-body text-center">
                    <h1>Nouveau produit</h1>
                    <i class="fa-solid fa-shirt icon-flicker fa-xl"></i>
                        <form method="post" id="FormProduits" action="{{route('produits.store')}}">
                        @csrf
                            <div class="row text-start">
                                <div class="col-12">
                                    <label for="nomProduit" class="form-label">Nom :</label>
                                    <input type="text" placeholder="Indiquez le nom du produit" class="form-control" name="nomProduit">
                                </div>
                            </div>
                            <div class="row pt-2">
                                <div class="col-6">
                                    <label class="form-label">Tailles :</label>
                                    @if(count($tailles))
                                    <select class="form-select" multiple>
                                        @foreach($tailles as $taille)
                                        <option name="taille" id="taille" value="{{ $taille->detail }}">{{ $taille->detail }}</option>
                                        @endforeach
                                    </select>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Couleurs :</label>
                                    <select class="form-select" multiple>
                                    @if(count($couleurs))
                                        @foreach($couleurs as $couleur)
                                        <option name="couleur" id="couleur" value="{{ $couleur->detail }}">{{ $couleur->detail }}</option>
                                        @endforeach
                                    
                                    @endif
                                    </select>
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