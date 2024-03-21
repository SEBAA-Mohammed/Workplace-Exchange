@extends('layouts.master')
@section('page')
New City
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
                        <h3 class="card-title">Create new city</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('cities.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ville :</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="city" placeholder="Entrer votre ville" value="{{ old('city') }}">
                            </div>
                            @error('ville')
                            <div class="alert alert-danger">{{ $message }}
                            </div>
                            @enderror
                            <div class="form-group">
                                <label>Region :</label>
                                <select class="form-control select2" style="width: 100%;" name="region_id" value="{{ old('region_id') }}">
                                    @foreach ($regions as $region)
                                    <option value="{{ $region->id }}">{{ $region->region }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('region_id')
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