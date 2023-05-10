@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')
<div class="container-fluid h-100 g-0 retroBG" id="videoFrame">
    <div class="row g-0">
        <div class="col-12">
            <h1>Page accueil 'usagers'</h1>
            <form method="post" action="{{ route('usagers.supprimer')}}">
            @csrf
                @if (count($usagers))
                        <table class="w-100">
                            <tr>
                                <td><h5>Nom de l'usager</h5></td>
                                <td><h5>Adresse courriel</h5></td>
                                <td><h5>Couleurs disponibles</h5></td>
                            </tr>
                            @foreach ($usagers as $usager)
                                <tr>
                                    <td><p class="d-inline">{{ $usager->prenom }} {{$usager->nom}}</p></td>
                                    <td><p>{{$usager->adresseCourriel}}</p></td>
                                    <td><input type="checkbox" name="user" value="{{$usager->adresseCourriel}}"></td>   
                                </tr>    
                                @endforeach                       
                        </table>
                        @endif
        </div>
    </div>
    <div class="row">
        <div class="col-4">
                <button class="btn btn-danger">Supprimer un usager</button>
        </div>
    
            </form>
        <div class="col-4">
            <a href="{{ route('usagers.edit') }}"><button class="btn btn-warning">Modifier un usager</button></a>
        </div>

        <div class="col-4">
            <a href="{{ route('usagers.createAdmin') }}"><button class="btn btn-success">Créer un usager</button></a>
        </div>
    </div>
</div>
@endsection