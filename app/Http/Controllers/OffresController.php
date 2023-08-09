<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use App\Models\Offres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        // $offres = Offres::latest()->take(3)->get();
        $offres = Offres::get()->random(3);


// dd($offres);


        return Inertia::render('offres/show', [
            'offre' => $data,
            'offres' => $offres
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
