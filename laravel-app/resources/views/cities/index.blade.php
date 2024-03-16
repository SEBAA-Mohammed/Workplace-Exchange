@extends('layouts.master')
@section('page')
    Cities
@endsection
@section('content')
    @include('components.table', [
        'table' => 'cities',
        'columns' => ['id', 'city', 'region'],
        'collection' => $cities,
    ])
@endsection
