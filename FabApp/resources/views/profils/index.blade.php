@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-4 offset-xl-4 mt-3">
            <div class="container-fluid h-100 g-0" id="videoFrame">
            <video id="videoBG" autoplay muted loop src="{{ asset('img/WithoutRobotSynthwave1.mp4') }}" class="d-none d-xxl-block"></video>
            <div class="container-fluid d-flex align-items-center justify-content-center h-100 g-0 d-col">
                <div class="row g-0 pb-2">
                    <div class="col-12">
                        <div class="card text-white bg-card text-center d-none d-lg-block d-xl-block d-xxl-block" id="cardFrame">
                            <div class="card-body">
                                <h1><?php echo Session::get('prenom'), ' ', Session::get('nom') ?></h1>
                                <h3><?php echo Session::get('adresseCourriel') ?></h3>
                            </div>
                    </div>
                </div>
            </div>
    </div>
</div>
        </div>
    </div>
    
</div>
@endsection