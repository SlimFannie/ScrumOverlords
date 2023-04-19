@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-xl-4 offset-xl-5 mt-5">
            <h1>Page ajout de produits</h1>
            @if(count($couleurs))
                @foreach($couleurs as $couleur)
                    <p>{{$couleur->detail}}</p>
                @endforeach
            @endif
            <br>
            @if(count($tailles))
                @foreach($tailles as $taille)
                    <p>{{$taille->detail}}</p>
                @endforeach
            @endif
        </div>
    </div>
    
</div>
@endsection