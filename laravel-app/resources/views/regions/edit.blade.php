@extends('layouts.master')
@section('page')
Update Region
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
                        <h3 class="card-title">Update this region</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('regions.update', $region->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Region :</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="region" placeholder="Entrer votre region" value="{{ old('region',$region->region) }}">
                            </div>
                            @error('region')
                            <div class="alert alert-danger">{{ $message }}
                            </div>
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