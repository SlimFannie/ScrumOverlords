@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')
<div class="container-fluid h-100 g-0 retroBG d-flex align-items-center justify-content-center g-0 d-col" id="videoFrame">
    <div class="row g-0 w-lg-75 d-flex align-items-center justify-content-center">
        <div class="col-12 w-lg-50">
        <div class="card text-white bg-card" id="cardFrame">
            <div class="card-body border-flicker">
                <h1 class="text-center pb-3 m-0">Gestion des usagers</h1>
                    @if (count($usagers))
                        <table class="w-lg-100 d-flex justify-content-center">
                            <tr>
                                <td class="px-2"><h5 class="d-none d-lg-inline">Nom</h5></td>
                                <td class="px-2"><h5 class="d-none d-lg-inline">Adresse courriel</h5></td>
                            </tr>
                            @foreach ($usagers as $usager)
                                <tr>
                                    <td class="px-2"><p class="d-none d-lg-inline">{{ $usager->prenom }} {{$usager->nom}}</p><p class="d-inline d-lg-none">{{$usager->prenom}}</p></td>
                                    <td class="px-2"><p class="d-none d-lg-inline">{{$usager->adresseCourriel}}</p><p class="d-inline d-lg-none">{{$usager->nom}}</p></td>
                                    <td class="px-2">
                                        <form action="{{ route('usagers.supprimer') }}" method="POST">
                                            @csrf 
                                            <button type="submit" name="suppUser" id="suppUser" value="{{$usager->id}}" class="bg-deco"><i class="fa-solid fa-xmark hoverSupp"></i></button>
                                        </form> 
                                    </td>
                                    <td class="px-2">
                                        <form action="{{ route('usagers.edit', $usager->id) }}" method="get">
                                            @csrf 
                                            <button type="submit" name="modifUser" class="bg-deco"><i class="fa-solid fa-pencil hoverModif"></i></button>
                                        </form>
                                    </td>
                                </tr>    
                                @endforeach        
                                <tr>
                                    <td colspan="4" class="text-center pt-3 pb-0">
                                         <a href="{{ route('usagers.createAdmin') }}" class="hover-underline-animation"><h5 class="text-white-50">Créer un usager</h5></a>&nbsp<i class="fa-solid fa-plus fa-xl"></i>
                                    </td>
                                </tr>               
                        </table>
                        @endif
            </div>
        </div>
    </div>
</div>
@endsection