<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Session;

class ProfilsController extends Controller
{
    /**
     * Display a listing of the resource.
     *  @return \Illuminate\View\View
     */
    public function index() : View
    {
        return View('profils.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('produits.create');
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
    public function edit()
    {
        return view('profils.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {
            if ($request->motDePasse == $request->motDePasseCon) {
                $password = Hash::make($request->get('motDePasse'));
                /* DB::select('call creationUsager('motDePasse' => $password]); */
            }
        }
        catch(\Throwable $e) {
            Log::debug($e);
            return redirect()->route('films.index')->withErrors(['La modification n\'a pas fonctionnée.']);
        }

        return redirect()->route('films.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
