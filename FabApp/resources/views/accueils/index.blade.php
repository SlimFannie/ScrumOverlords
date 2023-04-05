@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <video id="videoBG" autoplay muted loop src="{{ asset('img/WithoutRobotSynthwave.mp4') }}"></video>
        </div>
    </div>
    
</div>
@endsection