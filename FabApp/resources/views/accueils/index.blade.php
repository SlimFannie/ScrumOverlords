@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <video id="videoBG" autoplay muted loop src="{{ asset('img/WithoutRobotSynthwave.mp4') }}"></video>
        </div>

        <button type="submit" class="btn btn-success" id="btnSubmit"><a href="{{ route('usagers.create') }}">Créer un compte</a></button>
    </div>
    
</div>
@endsection