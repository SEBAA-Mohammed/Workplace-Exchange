@extends('layouts.master')
@section('page')
    Occupations
@endsection
@section('content')
    @include('components.table', [
        'table' => 'occupations',
        'tableS' => 'Occupation',
        'columns' => ['id', 'occupation'],
        'collection' => $occupations,
    ])
@endsection
