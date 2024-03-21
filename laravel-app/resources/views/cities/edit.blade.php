@extends('layouts.master')
@section('page')
Update City
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
                        <h3 class="card-title">Update this city</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('cities.update',$city->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ville :</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="city" placeholder="Entrer votre ville" value="{{ old('city',$city->city) }}">
                            </div>
                            @error('ville')
                            <div class="alert alert-danger">{{ $message }}
                            </div>
                            @enderror
                            <div class="form-group">
                                <label>Region :</label>
                                <select class="form-control select2" style="width: 100%;" name="region_id" value="{{ old('region_id' ) }}">
                                    @foreach ($regions as $region)
                                    @if ($region->id == $city->region_id)
                                    <option value="{{ $region->id }}" selected>{{ $region->region }}</option>
                                    @else
                                    <option value="{{ $region->id }}">{{ $region->region }}</option>
                                    @endif
                                    @endforeach
                                </select>

                            </div>
                            @error('region_id')
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