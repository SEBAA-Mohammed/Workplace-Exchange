<?php

namespace App\Http\Controllers;

use App\Http\Requests\EstablishmentRequest;
use App\Models\Establishment;
use Illuminate\Http\Request;

class EstablishmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('establishments.index', ['establishments' => Establishment::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('establishments.create');
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
        return view('establishments.edit', ['establishment' => $establishment]);
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
