@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')
    <div class="container-fluid d-flex align-items-center justify-content-center vh-100 g-0 d-col retroBG">
        <div class="row w-lg-50 g-0 pb-2 d-flex justify-content-center">
            <div class="col-12 w-lg-75">
                <div class="card text-white bg-card" id="cardFrame">
                    <div class="card-body border-flicker">
                        <h1 class="text-center pb-lg-3 m-0">Liste des produits</h1>
                        @if (count($produits))
                        <table class="w-lg-100 d-flex justify-content-center">
                            <tr>
                                <td class="px-2"><h5 class="d-none d-lg-inline">Nom du produit</h5></td>
                                <td class="px-2"><h5 class="d-none d-lg-inline">Tailles</h5></td>
                                <td class="px-2"><h5 class="d-none d-lg-inline">Couleurs</h5></td>
                            </tr>
                            @foreach ($produits as $produit)
                                <tr>
                                    <td class="px-2"><p class="d-inline">{{ $produit->nomProduit }}</p></td>
                                    <td class="px-2"><select class="d-none d-lg-inline">
                                    @if(count($tailles))
                                        @foreach($tailles as $taille)
                                            <option value="{{$taille->detail}}">{{$taille->detail}}</option>
                                        @endforeach
                                    @endif
                                    </select></td>
                                    <td class="px-2"><select class="d-none d-lg-inline">
                                    @if(count($couleurs))
                                        @foreach($couleurs as $couleur)
                                            <option value="{{$couleur->detail}}">{{$couleur->detail}}</option>
                                        @endforeach
                                    @endif
                                    </select>
                                    </td>
                                    <td class="px-2">
                                        <form action="{{ route('produits.supprimer') }}"  method="POST">
                                            @csrf 
                                            <button type="submit" name="typeProduit" id="typeProduit" value="{{$produit->nomProduit}}" class="bg-deco"><i class="fa-solid fa-xmark hoverSupp"></i></button>
                                        </form> 
                                    </td>
                                    <td class="px-2">
                                        <a href="{{ route('produits.edit') }}" ><i class="fa-solid fa-pencil hoverModif"></i></a>
                                    </td>
                                </tr>    
                                @endforeach
                                <tr>
                                    <td colspan="5" class="text-center pt-3 pb-0">
                                        <a href="{{route('produits.create')}}" class="hover"><h5 class="text-white-50 hover-underline-animation">Nouveau produit </h5>&nbsp&nbsp<i class="fa-solid fa-shirt hoverHide fa-xl"></i><i class="fa-solid fa-plus hoverShow icon-flicker fa-xl"></i></a>
                                    </td>
                                </tr>                             
                        </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection