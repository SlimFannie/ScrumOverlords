@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')
<div class="container-fluid h-100 g-0 retroBG" id="videoFrame">
    <div class="container-fluid d-flex align-items-center justify-content-center h-100 g-0 d-col">
        <div class="row w-50 g-0 pb-2">
            <div class="col-12">
                <div class="card text-white bg-card" id="cardFrame">
                    <div class="card-body">
                        <h1 class="text-center">Liste des produits</h1>
                        <br>
                        @if (count($produits))
                        <table class="w-100">
                            @foreach ($produits as $produit)
                                <tr>
                                    <td>{{ $produit->nomProduit }}</td>
                                    <td>Nb réservations</td>
                                    <td>Nb achat</td>
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
        <div class="row gx-5 pt-5">
            <div class="col-4 text-center ">
                <a href="{{route('produits.create')}}"><button class="btn btn-success">Créer un nouveau produit</button></a>
            </div>
        </div>
    </div>
</div> 
@endsection