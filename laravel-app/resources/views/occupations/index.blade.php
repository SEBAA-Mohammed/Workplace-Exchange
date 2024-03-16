@extends('layouts.master')
@section('page')
    Occupations
@endsection
@section('content')
    @include('components.table', [
        'table' => 'occupations',
        'columns' => ['id', 'occupation'],
        'collection' => $occupations,
    ])
@endsection
