<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExchangeRequest;
use App\Models\City;
use App\Models\Employee;
use App\Models\Exchange;
use Illuminate\Http\Request;

class ExchangeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exchanges = Exchange::with('city', 'employee')->get();
        return view('exchanges.index', ['exchanges' => $exchanges]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cities = City::all();
        $employees = Employee::all();
        return view('exchanges.create', compact('cities', 'employees'));
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
        $cities = City::all();
        $employees = Employee::all();
        return view('exchanges.edit', compact('exchange', 'cities', 'employees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExchangeRequest $request, Exchange $exchange)
    {
        $valide = $request->has('valide') ? 1 : 0;
        $request['valide'] = $valide;
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
