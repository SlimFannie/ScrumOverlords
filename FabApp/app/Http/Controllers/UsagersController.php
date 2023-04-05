<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Illuminate\View\View;

class UsagersController extends Controller
{
    /**
     * Display a listing of the resource.
     *  @return \Illuminate\View\View
     */
    public function index() : View
    {
        return View('usagers.index');
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

    public function showLoginForm()
    {
        return View('usagers.showLoginForm');
    }
}
