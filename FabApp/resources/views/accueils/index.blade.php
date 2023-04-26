@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')
<div class="container-fluid h-100 g-0" id="videoFrame">
    <video id="videoBG" autoplay muted loop src="{{ asset('img/WithoutRobotSynthwave1.mp4') }}" class="d-none d-xxl-block"></video>
    <div class="container-fluid d-flex align-items-center justify-content-center h-100 g-0 d-col">
        <div class="row g-0 pb-2">
            <div class="col-12">
                <div class="card text-white bg-card text-center d-none d-lg-block d-xl-block d-xxl-block" id="cardFrame">
                    <div class="card-body">
                        <h3 class="typewriter1">Hé non! Il n'y a aucune campagne de financement en cours.</h3>
                        <br>
                        <p>Cette application a été réalisée en 2023 par l'équipe étudiante Scrum Overlords. Trois aventuriers de l'informatique, Francis Chalifour, Alexandre Grondin et Fannie Hamel
                        Thibault se sont donné pour mission de créer la meilleure application de vente du monde du Cégep de Trois-Rivières.</p>
                        <br>
                        <h5 class="typewriter3">En attendant la prochaine campagne, accompagnez les développeurs dans une quête de leur choix!</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gx-5 pt-5 d-sm-none d-none">
            <div class="col text-center ">
                <button class="btn bg-btn">Francis</button>
            </div>
            <div class="col text-center">
                <button class="btn bg-btn">Alexandre</button>
            </div>
            <div class="col text-center">
                <button class="btn bg-btn">Fannie</button>
            </div>
        </div>
    </div>
</div>
@endsection