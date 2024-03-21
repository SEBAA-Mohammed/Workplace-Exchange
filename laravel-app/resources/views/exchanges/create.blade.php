@extends('layouts.master')
@section('page')
New Exchange
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Create new exchange</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('exchanges.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Date :</label>
                                <input type="date" class="form-control" id="exampleInputEmail1" name="date" placeholder="Entrer votre ville" value="{{ old('date') }}">
                            </div>
                            @error('date')
                            <div class="alert alert-danger">{{ $message }}
                            </div>
                            @enderror
                            <div class="form-group">
                                <label for="exampleInputEmail1">Validé :</label>
                                <input type="checkbox" class="form-control" id="exampleInputEmail1" name="valide" placeholder="Entrer code" value="1">
                            </div>
                            @error('valide')
                            <div class="alert alert-danger">{{ $message }}
                            </div>
                            @enderror
                            <div class="form-group">
                                <label>City :</label>
                                <select class="form-control select2" style="width: 100%;" name="city_id" value="{{ old('city_id') }}">
                                    @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->city }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('city_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="card-footer text-center">
                                <div class="form-group">
                                    <label>Employee :</label>
                                    <select class="form-control select2" style="width: 100%;" name="employee_id" value="{{ old('employee_id') }}">
                                        @foreach ($employees as $employee)
                                        <option value="{{ $employee->id }}">{{ $employee->nom }} {{$employee->prenom}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('employee_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection