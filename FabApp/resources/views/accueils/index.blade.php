@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')
<div class="container-fluid d-flex align-items-center justify-content-center h-100">
    <div class="row">
        <div class="col-12">
            <video id="videoBG" autoplay muted loop src="{{ asset('img/WithoutRobotSynthwave.mp4') }}"></video>
            <div class="card text-white bg-card text-center">
                <div class="card-body">
                    Malheureusement, il n'y a aucune campagne de financement en cours.
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-success" id="btnSubmit"><a href="{{ route('usagers.create') }}">Créer un compte</a></button>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-success" id="btnSubmit"><a href="{{ route('usagers.showLoginForm') }}">Se connecter</a></button>
            </div>
        </div>
    </div>
    
</div>
@endsection