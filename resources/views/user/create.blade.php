@extends('layouts.app')
@section('pageTitle','User')
@section('title','User')
@section('content')
    <div class="container-fluid">
        <a href="{{ route('piket.index') }}" class="btn btn-danger mb-4"><i class="fas fa-arrow-left"></i>    Kembali</a>
        <div class="card">
            <div class="card-header">
                <h5>Tambah User</h5>
            </div>
            
            <form action="" method="POST">
            @csrf
            <div class="card-body">                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control @error('') is-invalid @enderror" name="" placeholder="NIS Siswa">
                        @error('')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control @error('') is-invalid @enderror" name="" placeholder="Nama">
                        @error('')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-lg-8">
                        <input type="email" class="form-control @error('') is-invalid @enderror" name="" placeholder="E-mail">
                        @error('')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-lg-8">
                        <input type="password" class="form-control @error('') is-invalid @enderror" name="" placeholder="Password">
                        @error('')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Role</label>
                    <div class="col-lg-8">
                        <select class="form-control @error('') is-invalid @enderror" name="" id="">
                            <option value=""></option>
                            <option value="Admin">Admin</option>
                            <option value="Guru">Guru</option>
                            <option value="Pembimbing Rayon">Pembimbing Rayon</option>
                            <option value="BKK">BKK</option>
                            <option value="Kepala Sekolah">Kepala Sekolah</option>                            
                        </select>
                    </div>
                </div>                                               
                <button class="btn btn-primary"> <i class="fas fa-check"></i> Selesai</button>
            </div>            
            </form>
        </div>
    </div>
@endsection