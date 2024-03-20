<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use App\Models\Establishment;
use App\Models\Occupation;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::with('occupation', 'establishment')->get();
        return view('employees.index', ['employees' => $employees]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $establishments = Establishment::all();
        $occupations = Occupation::all();

        return view('employees.create', compact('establishments', 'occupations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeRequest $request)
    {
        $formFields = $request->validated();
        $formFields['password'] = Hash::make($request->password);
        $this->uploadImage($request, $formFields);

        Employee::create($formFields);
        return redirect()->route(('employees.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit', ['employee' => $employee]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->all());
        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index');
    }

    private function uploadImage(EmployeeRequest $request, array &$formFields)
    {
        unset($formFields['photo']);
        if ($request->hasFile('photo')) {
            $formFields['photo'] = $request->file('photo')->store('employees_photos', 'public');
        }
    }
}
