@extends('layouts.master')
@section('page')
Update Exchange
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
                        <h3 class="card-title">Update this exchange</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('exchanges.update' , $exchange->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Date :</label>
                                <input type="date" class="form-control" id="exampleInputEmail1" name="date" placeholder="Entrer votre ville" value="{{ old('date' , $exchange->date) }}">
                            </div>
                            @error('date')
                            <div class="alert alert-danger">{{ $message }}
                            </div>
                            @enderror
                            <div class="form-group">
                                <label for="exampleInputEmail1">Validé :</label>
                                <input type="checkbox" class="form-control" id="exampleInputEmail1" name="valide" placeholder="Entrer code" value="1" {{ $exchange->valide ? 'checked' : ''}}>
                            </div>
                            @error('valide')
                            <div class="alert alert-danger">{{ $message }}
                            </div>
                            @enderror
                            <div class="form-group">
                                <label>City :</label>
                                <select class="form-control select2" style="width: 100%;" name="city_id" value="{{ old('city_id' ) }}">
                                    @foreach ($cities as $city)
                                    @if ($city->id == $exchange->city_id)
                                    <option value="{{ $city->id }}" selected>{{ $city->city }}</option>
                                    @else
                                    <option value="{{ $city->id }}">{{ $city->city }}</option>
                                    @endif
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
                                        @if ($employee->id == $exchange->employee_id)
                                        <option value="{{ $employee->id }}" selected>{{ $employee->nom }} {{$employee->prenom}}</option>
                                        @else
                                        <option value="{{ $employee->id }}">{{ $employee->nom }} {{$employee->prenom}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                                @error('employee_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection