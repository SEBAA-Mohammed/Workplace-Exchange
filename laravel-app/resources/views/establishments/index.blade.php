@extends('layouts.master')
@section('page')
    Establishments
@endsection
@section('content')
    @include('components.table', [
        'table' => 'establishments',
        'tableS' => 'Establishment',
        'columns' => ['id', 'establishment', 'code', 'adresse', 'tel', 'fax', 'city'],
        'collection' => $establishments,
    ])
@endsection
