@extends('layouts.app')
@section('pageTitle','Jadwal Kumpul Rayon')
@section('title','Jadwal Kumpul Rayon')
@section('content')
    <div class="container-fluid">
        <a href="{{ route('kumpul_rayon.index') }}" class="btn btn-danger mb-4"><i class="fas fa-arrow-left"></i>    Kembali</a>
        <div class="card">
            <div class="card-header">
                <h5>Buat Jadwal Kumpul</h5>
            </div>
            
            <form action="{{ route('kumpul_rayon.store') }}" method="POST">
            @csrf
            <div class="card-body">                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-lg-8">
                        <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" placeholder="NIS Siswa">
                        @error('tanggal')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jam</label>
                    <div class="col-lg-8">
                        <input type="time" class="form-control @error('jam') is-invalid @enderror" name="jam" placeholder="Nama Siswa">
                        @error('jam')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Hari</label>
                    <div class="col-lg-8">
                        <select class="form-control @error('hari') is-invalid @enderror" name="hari" id="">
                            <option disabled selected>Hari</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
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