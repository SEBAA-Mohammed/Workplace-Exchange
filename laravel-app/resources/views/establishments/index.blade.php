@extends('layouts.master')
@section('page')
    Establishments
@endsection
@section('content')
    @include('components.table', [
        'table' => 'establishments',
        'columns' => ['id', 'establishment', 'code', 'adresse', 'tel', 'fax', 'city'],
        'collection' => $establishments,
    ])
@endsection
