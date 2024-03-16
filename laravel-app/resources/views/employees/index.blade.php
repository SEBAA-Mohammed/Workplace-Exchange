@extends('layouts.master')
@section('page')
    Employees
@endsection
@section('content')
    @include('components.table', [
        'tableS' => 'Employee',
        'table' => 'employees',
        'columns' => ['id', 'nom', 'prenom', 'matricule', 'establishment', 'occupation'],
        'collection' => $employees,
    ])
@endsection
