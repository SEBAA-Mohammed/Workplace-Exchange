@extends('layouts.master')
@section('page')
Update Establishment
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
                        <h3 class="card-title">Update this establishment</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('establishments.update' , $establishment->id ) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Establishment :</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="establishment" placeholder="Entrer votre ville" value="{{ old('establishment',$establishment->establishment) }}">
                            </div>
                            @error('establishment')
                            <div class="alert alert-danger">{{ $message }}
                            </div>
                            @enderror
                            <div class="form-group">
                                <label for="exampleInputEmail1">Code :</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" name="code" placeholder="Entrer code" value="{{ old('code',$establishment->code) }}">
                            </div>
                            @error('code')
                            <div class="alert alert-danger">{{ $message }}
                            </div>
                            @enderror
                            <div class="form-group">
                                <label for="exampleInputEmail1">Adresse :</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="adresse" placeholder="Entrer adress" value="{{ old('adresse', $establishment->adresse) }}">
                            </div>
                            @error('adresse')
                            <div class="alert alert-danger">{{ $message }}
                            </div>
                            @enderror
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tel :</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="tel" placeholder="Entrer tel" value="{{ old('tel' , $establishment->tel) }}">
                            </div>
                            @error('tel')
                            <div class="alert alert-danger">{{ $message }}
                            </div>
                            @enderror
                            <div class="form-group">
                                <label for="exampleInputEmail1">Fax :</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="fax" placeholder="Entrer tel" value="{{ old('fax' , $establishment->fax) }}">
                            </div>
                            @error('fax')
                            <div class="alert alert-danger">{{ $message }}
                            </div>
                            @enderror
                            <div class="form-group">
                                <label>City :</label>
                                <select class="form-control select2" style="width: 100%;" name="city_id" value="{{ old('city_id') }}">
                                @foreach ($cities as $city)
                                    @if ($city->id == $establishment->city_id)
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
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection