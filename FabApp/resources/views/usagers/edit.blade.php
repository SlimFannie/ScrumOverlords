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

            </form>
        </div>
    </div>
</div>
@endif
@endsection