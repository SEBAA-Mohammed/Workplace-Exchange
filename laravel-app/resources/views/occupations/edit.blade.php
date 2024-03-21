@extends('layouts.master')
@section('page')
Update Occupation
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
                        <h3 class="card-title">Update this occupation</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('occupations.update' , $occupation->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Occupation :</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="occupation" placeholder="Entrer votre occupation" value="{{ old('occupation',$occupation->occupation) }}">
                            </div>
                            @error('occupation')
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