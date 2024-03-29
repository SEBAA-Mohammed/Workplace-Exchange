<?php

namespace App\Http\Controllers;

use App\Http\Requests\EstablishmentRequest;
use App\Models\City;
use App\Models\Establishment;
use Illuminate\Http\Request;

class EstablishmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $establishments = Establishment::with('city')->get();
        return view('establishments.index', ['establishments' => $establishments]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cities = City::all();
        return view('establishments.create', compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EstablishmentRequest $request)
    {
        Establishment::create($request->all());
        return redirect()->route(('establishments.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Establishment $establishment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Establishment $establishment)
    {
        $cities = City::all();
        return view('establishments.edit', compact('establishment','cities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EstablishmentRequest $request, Establishment $establishment)
    {
        $establishment->update($request->all());
        return redirect()->route('establishments.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Establishment $establishment)
    {
        $establishment->delete();
        return redirect()->route('establishments.index');
    }
}
