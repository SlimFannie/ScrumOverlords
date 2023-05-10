@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')
<div class="container-fluid h-100 g-0 retroBG" id="videoFrame">
    <div class="container-fluid d-flex align-items-center justify-content-center h-100 g-0 d-col">
        <div class="row w-50 g-0 pb-2 d-flex justify-content-center">
            <div class="col-12 w-75">
                <div class="card text-white bg-card" id="cardFrame">
                    <div class="card-body">
                        <h1 class="text-center">Liste des produits</h1>
                        <br>
                        @if (count($produits))
                        <table class="w-100">
                            <tr>
                                <td><h5>Nom du produit</h5></td>
                                <td><h5>Tailles disponibles</h5></td>
                                <td><h5>Couleurs disponibles</h5></td>
                            </tr>
                            @foreach ($produits as $produit)
                                <tr>
                                    <td><p class="d-inline">{{ $produit->nomProduit }}</p></td>
                                    <td><select>
                                    @if(count($tailles))
                                        @foreach($tailles as $taille)
                                            <option value="{{$taille->detail}}">{{$taille->detail}}</option>
                                        @endforeach
                                    @endif
                                    </select></td>
                                    <td><select>
                                    @if(count($couleurs))
                                        @foreach($couleurs as $couleur)
                                            <option value="{{$couleur->detail}}">{{$couleur->detail}}</option>
                                        @endforeach
                                    @endif
                                    </select>
                                    </td>
                                    <td>
                                        <form action="{{ route('produits.supprimer') }}"  method="POST">
                                            @csrf 
                                            <button type="submit" name="typeProduit" id="typeProduit" value="{{$produit->nomProduit}}" class="bg-deco"><i class="fa-solid fa-xmark hoverSupp"></i></button>
                                        </form> 
                                    </td>
                                    <td>
                                        <a href="{{ route('produits.edit') }}" ><i class="fa-solid fa-pencil hoverModif"></i></a>
                                    </td>
                                </tr>    
                                @endforeach                       
                        </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-12 text-center">
                <a href="{{route('produits.create')}}"><button class="btn bg-btn">Créer un nouveau produit <i class="fa-solid fa-plus"></i></button></a>
            </div>
        </div>
    </div>
</div> 
@endsection