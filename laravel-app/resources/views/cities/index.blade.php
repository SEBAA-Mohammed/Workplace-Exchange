@extends('layouts.master')
@section('page')
    Cities
@endsection
@section('content')
    @include('components.table', [
        'table' => 'cities',
        'tableS' => 'City',
        'columns' => ['id', 'city', 'region'],
        'collection' => $cities,
    ])
@endsection
