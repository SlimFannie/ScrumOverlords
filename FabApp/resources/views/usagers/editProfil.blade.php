@extends('layouts.app')

@section('titre', 'La Fab App')

@section('contenu')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-4 offset-xl-4 mt-3">
            <div class="container-fluid h-100 g-0 retroBG" id="videoFrame">
            <div class="container-fluid d-flex align-items-center justify-content-center h-100 g-0 d-col">
                <div class="row g-0 pb-2">
                    <div class="col-12">
                        <div class="card text-white bg-card text-center" id="cardFrame">
                            <div class="card-body">
                                <form method="post" id="FormUsager" class="text-center" action=>
                                    <label for="mdp" class="form-label"> Nouveau mot de passe </label>
                                    <input type="text" class="form-control" id="mdp" name="motDePasse">
                                    <label for="mdpCon" class="form-label"> Confirmation du mot de passe </label>
                                    <input type="text" id="mdpCon" class="form-control" name="motDePasseCon">
                                    <br>
                                    <button type="submit" class="btn bg-btn d-inline-flex align-items-center" id="btnSubmit"><h5 class="m-0 fontLogo">Confirmer&nbsp <i class="fa-solid fa-bolt fa-lg icon-flicker"></i></h5></button>
                                </form>
                            </div>
                        </div>
                    </div>
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