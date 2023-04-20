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
        return View('accueils.index', compact('usagers'));
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
            $prenom = $request->get('prenom');
            $nom = $request->get('nom');
            $adresseCourriel = $request->get('adresseCourriel');
            $password = Hash::make($request->get('motDePasse'));

            DB::select('call creationUsager(:prenom, :nom, :adresseCourriel,
             :motDePasse)', ['prenom' => $prenom,'nom' => $nom,
              'adresseCourriel' => $adresseCourriel, 'motDePasse' => $password]);
        }
        catch(\Throwable $e)
        {
            Log::debug($e);
        }
        return redirect()->route('usagers.index');
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
                    return View('accueils.index')->with('message', "Bien ouèj mon gars");
                }
                else
                {
                    return redirect()->route('usagers.login')->withErrors(['message','RIIIP']);
                } 
            }
            {
                return redirect()->route('usagers.login')->withErrors(['message','RIIIP']);
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
