<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Offres;
use Illuminate\Http\Request;
use Inertia\Response;

class OffresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():Response
    {
        //

        $data = Offres::latest()->get();



        return Inertia::render('offres/index', [
            'offres' => $data
        ]);
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
    public function show($id):Response
    {
        //

        $data = Offres::find($id);

        dd($data);

        return Inertia::render('offres/show', [

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offres $offres)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Offres $offres)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offres $offres)
    {
        //
    }
}
