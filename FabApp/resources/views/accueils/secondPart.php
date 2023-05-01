@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')
<div class="container-fluid h-100 g-0" id="videoFrame">
    <video id="videoBG" autoplay muted loop src="{{ asset('img/WithoutRobotSynthwave1.mp4') }}"></video>
    <div class="container-fluid d-flex align-items-center justify-content-center h-100 g-0 d-col">
        <div class="row g-0 pb-2">
            <div class="col-12">
                <div class="card text-white bg-card text-center d-none d-lg-block d-xl-block d-xxl-block" id="cardFrame">
                    <div class="card-body">
                        <h1>Campagne partie 2</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection