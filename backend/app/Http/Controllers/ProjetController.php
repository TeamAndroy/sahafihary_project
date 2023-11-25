<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Projet::all();
    }

    /**
     * for creating a new resource.
     */
    public function store(Request $request)
    {
        return Projet::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show($p)
    {
        $projet = Projet::findOrFail($p);
        return $projet;
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $p)
    {
        $projet = Projet::findOrFail($p);
        $projet->update($request->all());
        return $projet;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($p)
    {
        // $projet = Projet::findOrFail($p);
        return Projet::destroy($p);
    }
}
