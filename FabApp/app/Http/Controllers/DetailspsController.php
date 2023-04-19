<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use App\Models\Detailps;
use DB;

class DetailspsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\View\View
     */
    public function index() : View
    {
        return View('produits.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$produits = new Detailps;

        $couleurs = DB::select('CALL selectionCouleurProduit()');
        
        //$produits->fill($couleurs);
        
        $tailles = DB::select('CALL selectionTailleProduit()');
        
        //Foo::hydrate($topic);

        return View('produits.create', compact(['couleurs','tailles']));
       
        
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
