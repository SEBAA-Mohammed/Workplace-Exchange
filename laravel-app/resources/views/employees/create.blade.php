@extends('layouts.master')
@section('page')
    New employee
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
                            <h3 class="card-title">Create new employee</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nom :</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="nom"
                                        placeholder="Entrer votre nom">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Prenom :</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="prenom"
                                        placeholder="Entrer votre prenom">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Matricule :</label>
                                    <input type="number" class="form-control" id="exampleInputEmail1" name="matricule"
                                        placeholder="Entrer votre matricule">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Grade :</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="grade"
                                        placeholder="Entrer votre grade">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Date de naissance :</label>
                                    <input type="date" class="form-control" id="exampleInputEmail1" name="date_naissance"
                                        placeholder="Entrer votre date de naissance">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Date de recrutement :</label>
                                    <input type="date" class="form-control" id="exampleInputEmail1"
                                        name="date_recrutement" placeholder="Entrer votre date de recrutement">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Poste :</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="poste"
                                        placeholder="Entrer votre poste">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tel :</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="tel"
                                        placeholder="Entrer votre telephone">
                                </div>
                                <div class="form-group">
                                    <label>Metier :</label>
                                    <select class="form-control select2" style="width: 100%;" name="occupation_id">
                                        @foreach ($occupations as $occupation)
                                            <option value="{{ $occupation->id }}">{{ $occupation->occupation }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Etablissement :</label>
                                    <select class="form-control select2" style="width: 100%;" name="establishment_id">
                                        @foreach ($establishments as $establishment)
                                            <option value="{{ $establishment->id }}">{{ $establishment->establishment }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email adresse :</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        placeholder="Entrer votre email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Photo :</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile"
                                                name="photo">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
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
