@extends('layouts.master')
@section('page')
New Region
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
                        <h3 class="card-title">Create new region</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('regions.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Region :</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="region" placeholder="Entrer votre region" value="{{ old('city') }}">
                            </div>
                            @error('region')
                            <div class="alert alert-danger">{{ $message }}
                            </div>
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