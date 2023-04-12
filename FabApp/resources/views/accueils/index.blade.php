@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')
<div class="container-fluid d-flex align-items-center justify-content-center h-100" id="videoFrame">
    <video id="videoBG" autoplay muted loop src="{{ asset('img/WithoutRobotSynthwave.mp4') }}"></video>
    <div class="card text-white bg-card text-center">
        <div class="card-body">
            <h3>Hé non! Il n'y a aucune campagne de financement en cours.</h3>
            <br>
            <p>Cette application a été réalisée en 2023 par l'équipe étudiante Scrum Overlords. Trois aventuriers de l'informatique, Francis Chalifour, Alexandre Grondin et Fannie Hamel
            Thibault se sont donné pour mission de créer la meilleure application de vente du monde du Cégep de Trois-Rivières.</p>
            <br>
            <h5>En attendant la prochaine campagne, accompagnez les développeurs dans une quête de leur choix!</h5>
        </div>
    </div>
    <button>Francis</button>
</div>
@endsection