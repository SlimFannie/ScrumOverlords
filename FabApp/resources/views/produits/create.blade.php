@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')
<div class="container-fluid h-100 g-0 w-100 retroBG" id="videoFrame">
    <div class="container-fluid d-flex justify-content-center h-100 g-0 d-col">
        <div class="row g-0 pb-2 w-100 d-flex justify-content-center">
            <div class="col-12 w-50">
                <div class="card text-white bg-card" id="cardFrame">
                    <div class="card-body">
                    <h1 class="text-center">Créer un nouveau produit</h1>
                        <form method="post" id="FormProduits" action="{{route('produits.store')}}">
                        @csrf
                            <div class="row">
                                <div class="col-12">
                                    <label for="nomProduit" class="form-label">Nom du nouveau produit :</label>
                                    <input type="text" placeholder="Indiquez le nom du produit" class="form-control" name="nomProduit">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label class="form-label">Tailles disponibles</label>
                                    @if(count($tailles))
                                    <ul>
                                        @foreach($tailles as $taille)
                                        <li>
                                            <label for="taille">{{$taille->detail}}</label>
                                            <input type="checkbox" id="taille" name="taille">
                                        </li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>
                                <div class="col-6">
                                <label class="form-label">Couleurs disponibles :</label>
                                    @if(count($couleurs))
                                    <ul>
                                        @foreach($couleurs as $couleur)
                                        <li>
                                            <label for="couleur">{{$couleur->detail}}</label>
                                            <input type="checkbox" name="couleur" id="couleur">
                                        </li>
                                        @endforeach
                                    </ul>
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