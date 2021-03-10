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
            <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="card-body">                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="nama Siswa">
                        @error('name')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>             
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-lg-8">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="E-mail">
                        @error('email')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>                     
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Password</label>
                    <div class="col-lg-8">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password">
                        @error('password')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>    
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Role</label>
                    <div class="col-lg-8">
                        <select class="form-control" name="role" id="">
                            <option disabled selected>Pilih Role</option>
                            <option value="admin">admin</option>
                            <option value="guru">guru</option>
                            <option value="pemray">pemray</option>
                            <option value="bkk">bkk</option>
                            <option value="kepsek">kepsek</option>                            
                        </select>
                    </div>
                </div>        
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">*PERHATIAN*(Pilih Nama rayon jika yang di daftarkan role PEMRAY jika tidak maka abaikan saja)</label>
                    <div class="col-lg-8">
                        <select class="form-control" name="nama_rayon" id="">
                            <option disabled selected>Pilih Nama Rayon</option>
                            @foreach ($rayons as $rayon)
                                <option value="{{ $rayon->nama_rayon }}">{{ $rayon->nama_rayon }}</option>
                            @endforeach                      
                        </select>
                    </div>
                </div>                                           
                <button class="btn btn-primary"> <i class="fas fa-check"></i> Selesai</button>
            </div>            
            </form>
        </div>
    </div>
@endsection