<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use App\Models\Details;
use DB;

class DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\View\View
     */
    public function index() : View
    {
        $produits = DB::select('CALL selectionProduitCampagne()');
        
        return View('produits.index', compact(['produits']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $couleurs = DB::select('CALL selectionCouleurProduit()');
        
        $tailles = DB::select('CALL selectionTailleProduit()');

        $produits = DB::select('CALL selectionProduitCampagne()');

        return View('produits.create', compact(['couleurs','tailles','produits']));       
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try
        {
            //Log::debug('Fonction lancée');
            $nomProduit = $request->get('nomProduit');
            //Log::debug($nomProduit);
            DB::select('call creationCampagneProduit(:nomProduit)',['nomProduit'=>$nomProduit]);
        }
        catch(\Throwable $e)
        {
            //Log::debug('NOPE');
            Log::debug($e);
        }
        return redirect()->route('produits.index');
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

    public function supprimer(Request $request)
    {
        try
        {
            $nomProduit = $request->input('typeProduit');
            DB::select('call suppressionCampagneProduit(:nomProduit)',['nomProduit'=>$nomProduit]);
            return redirect()->route('produits.index');
        }
        catch(\Throwable $e)
        {
            Log::debug($e);
            return redirect()->route('produits.index');
        }
    }
}
