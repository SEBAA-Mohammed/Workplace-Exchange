<?php

namespace App\Http\Controllers;

use App\Http\Requests\OccupationRequest;
use App\Models\Occupation;
use Illuminate\Http\Request;

class OccupationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('occupations.index', ['occupations' => Occupation::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('occupations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OccupationRequest $request)
    {
        Occupation::create($request->all());
        return redirect()->route(('occupations.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Occupation $occupation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Occupation $occupation)
    {
        return view('occupations.edit', ['occupation' => $occupation]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OccupationRequest $request, Occupation $occupation)
    {
        $occupation->update($request->all());
        return redirect()->route('occupations.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Occupation $occupation)
    {
        $occupation->delete();
        return redirect()->route('occupations.index');
    }
}
