@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')
<div class="container-fluid h-100 g-0 retroBG" id="videoFrame">
    <div class="row">
        <div class="col-xl-4 offset-xl-4 mt-5">
            <h1>Page accueil 'usagers'</h1>
            <form method="post" action="{{ route('usagers.supprimer')}}">
            @csrf
                @if(count($usagers))
                        @foreach($usagers as $usager)
                            <p>{{$usager->prenom}} {{$usager->nom}} {{$usager->adresseCourriel}}</p>
                            <input type="checkbox" name="user" value="{{$usager->id}}">
                        @endforeach
                @endif
        </div>
    </div>
    <div class="row">
        <div class="col">
                <button class="btn btn-danger">Supprimer un usager</button>
        </div>
    
            </form>
        <div class="col">
            <a href="{{ route('usagers.edit') }}"><button class="btn btn-warning">Modifier un usager</button></a>
        </div>
    </div>
</div>
@endsection