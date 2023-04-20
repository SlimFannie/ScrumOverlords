@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-4 offset-xl-4 mt-3">
            <h1>Page accueil 'usagers'</h1>
            @if(count($usagers))
                    @foreach($usagers as $usager)
                        <p>{{$usager->prenom}} {{$usager->nom}}</p>
                    @endforeach
            @endif
        </div>
    </div>
    
</div>
@endsection