@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')



@if(isset($usager))
<div class="container-fluid h-100 g-0 retroBG">
    <div class="row">
        <div class="col-3">
            <form method="post"  id="formUsager">
                @csrf
                @method('PATCH')

                <div class="form-group">
                    <label for="nomUser"></label>
                    <input type="text" class="form-control" id="nomUser" value="{{ old('nom', $usager->nom) }}" name="nomUtilisateur">
                </div>

                <div class="form-group">
                    <label for="email"></label>
                    <input type="text" class="form-control" id="email" value="{{ old('email', $usager->adresseCourriel) }}" name="email">
                </div>

                <div class="col" id="btnModifU">
                    <button type="submit" class="btn btn-danger offset-5 my-3" >Modifier</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endif
@endsection