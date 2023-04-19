<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Usager;
use App\Http\Requests\UsagerRequest;
use Illuminate\View\View;
use Illuminate\Auth\Middleware;
use Auth;
use DB;
use Hash;

class UsagersController extends Controller
{
    /**
     * Display a listing of the resource.
     *  @return \Illuminate\View\View
     */
    public function index() : View
    {
        $usagers = Usager::all(); 
        return View('usagers.index', compact('usagers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('usagers.create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsagerRequest $request)
    {
        try
        {

            $password = $request->get('motDePasse');
            $usager = new Usager();

            $usager->prenom = $request->get('prenom');
            $usager->nom = $request->get('nom');
            $usager->adresseCourriel = $request->get('adresseCourriel');
            $usager->motDePasse = Hash::make($password);
            
            $usager->save();
        }
        catch(\Throwable $e)
        {
            Log::debug($e);
        }
        return redirect()->route('usagers.index');
        // DB::select('call creationUsager(_prenom, _nom, _adresseCourriel, _motDePasse, _role)');
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

    public function showLoginForm()
    {
        $usagers = Usager::all(); 
        return View('usagers.showLoginForm', compact('usagers'));
    }

    public function login(Request $request)
    {   
        try
        {   
            $user = Usager::where('adresseCourriel','=',$request->adresseCourriel)->first();

            if($user && Hash::check($request->motDePasse, $user->motDePasse))
            {
                Auth::login($user);
                if(Auth::check())
                {
                    return View('usagers.index')->with('message', "Bien ouèj mon gars");
                }
                else
                {
                    return redirect()->route('accueils.index')->withErrors(['message','RIIIP']);
                } 
            }
            else
            {
                return "Naaaaay!";
            }
        }
        catch(\Throwable $e)
        {
            Log::debug($e);
        } 
    }

    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect()->route('accueils.index')->with('message', "Déconnexion réussie");
   }
}
