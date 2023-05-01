<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use DB;

class AccueilsController extends Controller
{
    /**
     * Display a listing of the resource.
     *  @return \Illuminate\View\View
     */
    public function index() : View
    {
        $campagne = DB::select('CALL SelectionCampagne()');
        if($campagne) {
            return View('accueils.firstPart');
        } else {
            return View('accueils.index');
        }
    }

    public function partOne() : View
    {
        return View('accueils.firstPart');
    }

    public function pause() : View
    {
        return View('accueils.pause');
    }

    public function partTwo() : View
    {
        return View('accueils.secondPart');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
