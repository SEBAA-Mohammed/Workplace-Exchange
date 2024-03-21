@extends('layouts.master')
@section('page')
    Regions
@endsection
@section('content')
    @include('components.table', [
        'table' => 'regions',
        'tableS' => 'Region',
        'columns' => ['id', 'region'],
        'collection' => $regions,
    ])
@endsection
