@extends('layouts.master')
@section('content')
    @include('components.table2', [
        'title' => 'Cities List',
        'table' => 'cities',
        'columns' => ['id', 'city', 'region'],
        'collection' => $cities,
    ])
@endsection
