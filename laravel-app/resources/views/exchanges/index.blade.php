@extends('layouts.master')
@section('page')
    Exchanges
@endsection
@section('content')
    @include('components.table', [
        'table' => 'exchanges',
        'tableS' => 'Exchange',
        'columns' => ['id', 'date', 'city', 'employee', 'valide'],
        'collection' => $exchanges,
    ])
@endsection
