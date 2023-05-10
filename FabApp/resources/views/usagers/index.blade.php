@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')
<div class="container-fluid h-100 g-0 retroBG d-flex align-items-center justify-content-center g-0 d-col" id="videoFrame">
    <div class="row g-0 w-75 d-flex justify-content-center">
        <div class="col-12 w-50">
        <div class="card text-white bg-card" id="cardFrame">
            <div class="card-body border-flicker">
                <h1 class="text-center">Gestion des usagers</h1>
                    @if (count($usagers))
                        <table class="w-100">
                            <tr>
                                <td><h5>Nom</h5></td>
                                <td><h5>Adresse courriel</h5></td>
                            </tr>
                            @foreach ($usagers as $usager)
                                <tr>
                                    <td><p class="d-inline">{{ $usager->prenom }} {{$usager->nom}}</p></td>
                                    <td><p class="d-inline">{{$usager->adresseCourriel}}</p></td>
                                    <td>
                                        <form action="{{ route('usagers.supprimer') }}" method="POST">
                                            @csrf 
                                            <button type="submit" name="suppUser" value="{{ $usager->adresseCourriel }}" class="bg-deco"><i class="fa-solid fa-xmark hoverSupp"></i></button>
                                        </form> 
                                    </td>
                                    <td>
                                        <form action="{{ route('usagers.edit', $usager->id) }}" method="get">
                                            @csrf 
                                            <button type="submit" name="modifUser" class="bg-deco"><i class="fa-solid fa-pencil hoverModif"></i></button>
                                        </form>
                                    </td>
                                </tr>    
                                @endforeach                       
                        </table>
                        @endif
            </div>
        </div>

        <div class="col-4">
            <a href="{{ route('usagers.createAdmin') }}"><button class="btn btn-success">Créer un usager</button></a>
        </div>
    </div>
</div>
@endsection