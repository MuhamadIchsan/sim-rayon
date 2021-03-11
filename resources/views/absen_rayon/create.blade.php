@extends('layouts.app')
@section('pageTitle','Absen Rayon')
@section('title','Absen Kumpul Rayon')
@section('content')
    <div class="container-fluid">
        <a href="{{ route('absen_rayon.index') }}" class="btn btn-danger mb-4"><i class="fas fa-arrow-left"></i>    Kembali</a>
        <div class="card">
            <div class="card-header">
                <h5>Tambah Data Absen</h5>
            </div>
            
            <form action="{{ route('absen_rayon.store') }}" method="POST">
                @csrf
                <div class="card-body">                
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">NIS Siswa</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control @error('nis') is-invalid @enderror" name="nis" placeholder="NIS Siswa">
                            @error('nis')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>                
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Siswa</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Nama Siswa">
                            @error('nama')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>                
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-lg-8">
                            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" placeholder="tanggal">
                            @error('tanggal')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>       
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kehadiran</label>
                        <div class="col-lg-8">
                            <select class="form-control" name="kehadiran" id="">
                                <option disabled selected>Kehadiran</option>
                                <option value="Hadir">Hadir</option>
                                <option value="Tidak">Tidak Hadir</option>
                                <option value="Izin">Izin</option>                            
                            </select>
                        </div>
                    </div>                
                    <button class="btn btn-primary"> <i class="fas fa-check"></i> Selesai</button>
                </div>            
                </form>
        </div>
    </div>
@endsection