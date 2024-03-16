@extends('layouts.master')
@section('page')
    Regions
@endsection
@section('content')
    @include('components.table', [
        'table' => 'regions',
        'columns' => ['id', 'region'],
        'collection' => $regions,
    ])
@endsection
