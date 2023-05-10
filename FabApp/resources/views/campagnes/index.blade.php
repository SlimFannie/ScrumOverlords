@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-4 offset-xl-4 mt-3">
            <h1>Page gestion</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            @if(count($campagnes))
                @foreach($campagnes as $campagne)
                    <h1>{{ $campagne -> nom }}</h1>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection