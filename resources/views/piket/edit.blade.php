@extends('layouts.app')
@section('pageTitle','Jadwal Piket')
@section('title','Jadwal Piket Siswa')
@section('content')
    <div class="container-fluid">
        <a href="{{ route('piket.index') }}" class="btn btn-danger mb-4"><i class="fas fa-arrow-left"></i>    Kembali</a>
        <div class="card">
            <div class="card-header">
                <h5>Edit Jadwal Piket</h5>
            </div>
            
            <form action="" method="POST">
            @csrf
            <div class="card-body">                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">NIS Siswa</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control @error('') is-invalid @enderror" name="" value="" placeholder="NIS Siswa">
                        @error('')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Siswa</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control @error('') is-invalid @enderror" name="" value="" placeholder="Nama Siswa">
                        @error('')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Hari</label>
                    <div class="col-lg-8">
                        <select class="form-control @error('') is-invalid @enderror" name="" id="">
                            <option value="">Hari</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamos">Kamis</option>
                            <option value="Jumat">Jumat</option>
                        </select>
                    </div>
                </div>                
                <button class="btn btn-primary"> <i class="fas fa-check"></i> Selesai</button>
            </div>            
            </form>
        </div>
    </div>
@endsection