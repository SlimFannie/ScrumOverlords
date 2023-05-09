@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')
<div class="container-fluid h-100 g-0 retroBG" id="videoFrame">
    <div class="container-fluid d-flex align-items-center justify-content-center h-100 g-0 d-col">
        <div class="row g-0 pb-2">
            <div class="col-12">
                <div class="card text-white bg-card text-center" id="cardFrame">
                    <div class="card-body">
                        <h3 id="typeUn"></h3>
                        <h5 id="typeDeux"></h5>
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