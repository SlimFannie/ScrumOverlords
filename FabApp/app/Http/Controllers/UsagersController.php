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
use Session;

class UsagersController extends Controller
{
    /**
     * Display a listing of the resource.
     *  @return \Illuminate\View\View
     */
    public function index() : View
    {
        $usagers = DB::Select('CALL SelectionUsager()'); 
        //$adresseCourriel = DB::Select('CALL SelectionAdresseCourriel()');
        return View('usagers.index', compact(['usagers']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('usagers.create');
    }

    public function createAdmin()
    {
        return View('usagers.createAdmin');
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
        return redirect()->route('usagers.create');
    }

    public function storeAdmin(UsagerRequest $request)
    {
        Log::Debug('Fonction lancée');
        try
        {
            Log::Debug('Essaie ajout');
            $prenom = $request->get('prenom');
            $nom = $request->get('nom');
            $adresseCourriel = $request->get('adresseCourriel');
            $password = Hash::make($request->get('motDePasse'));
            Log::Debug( $adresseCourriel);

            DB::select('call creationAdmin(:prenom, :nom, :adresseCourriel,
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

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        Log::debug($id);
        $usager = Usager::findOrFail($id);
        return View('usagers.edit',compact('usager'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try
        {
            $usager = User::findOrFail($id);
            $usager = $usager->update($request->all());
            $usager->save();
        }
        catch(\Throwable $e)
        {
            Log::debug($e);
            return redirect()->route('usagers.index');
        }
        return redirect()->route('usagers.index');
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
            Log::debug($user->motDePasse);
            if($user && Hash::check($request->motDePasse, $user->motDePasse))
            {
                
                Auth::login($user);
                if(Auth::check())
                {
                    Session::put('id', $user->role);
                    Session::put('prenom', $user->prenom);
                    Session::put('nom', $user->nom);
                    Session::put('adresseCourriel', $user->adresseCourriel);
                    return View('accueils.index', compact('user'));
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

   public function supprimer(Request $request)
   {
       try
       {
           $adresseCourriel = $request->input('suppUser');
           Log::debug($adresseCourriel);
           DB::select('call suppressionUser(:adresseCourriel)',['adresseCourriel'=>$adresseCourriel]);
           return redirect()->route('usagers.index');
       }
       catch(\Throwable $e)
       {
           Log::debug($e);
           return redirect()->route('usagers.index');
       }
   }
}
