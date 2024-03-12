<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExchangeRequest;
use App\Models\Exchange;
use Illuminate\Http\Request;

class ExchangeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('exchanges.index', ['exchanges' => Exchange::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('exchanges.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExchangeRequest $request)
    {
        Exchange::create($request->all());
        return redirect()->route(('exchanges.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Exchange $exchange)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Exchange $exchange)
    {
        return view('exchanges.edit', ['exchange' => $exchange]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExchangeRequest $request, Exchange $exchange)
    {
        $exchange->update($request->all());
        return redirect()->route('exchanges.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exchange $exchange)
    {
        $exchange->delete();
        return redirect()->route('exchanges.index');
    }
}
