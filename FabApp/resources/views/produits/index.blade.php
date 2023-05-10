@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')
<div class="container-fluid h-100 g-0 retroBG" id="videoFrame">
    <video id="videoBG" autoplay muted loop src="{{ asset('img/WithoutRobotSynthwave1.mp4') }}" class="d-none d-lg-block"></video>
    <div class="container-fluid d-flex align-items-center justify-content-center h-100 g-0 d-col">
        <div class="row g-0 pb-2">
            <div class="col-12">
                <div class="card text-white bg-card" id="cardFrame">
                    <div class="card-body">
                        <h3 class="text-center">Liste des produits</h3>
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
                                        <input type="checkbox" name="thisProduit" id="thisProduit">
                                    </td>
                                </tr>                           
                        </table>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row gx-5 pt-5">
            <div class="col-4 text-center">
                <button class="btn btn-danger">Supprimer un produit</button>
            </div>
            </form>
            <div class="col-4 text-center ">
                <a href="{{route('produits.create')}}"><button class="btn btn-success">Créer un nouveau produit</button></a>
            </div>
            <div class="col-4 text-center">
                <button class="btn btn-warning">Modifier un produit</button>
            </div>
        </div>
    </div>
</div> 
@endsection