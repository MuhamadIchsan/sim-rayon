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
            
            <form action="{{ route('piket.update', $piket->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="card-body">                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">NIS Siswa</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control @error('nis') is-invalid @enderror" name="nis" value="{{ $piket->nis }}" placeholder="NIS Siswa">
                        @error('nis')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Siswa</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $piket->nama }}" placeholder="Nama Siswa">
                        @error('nama')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Hari</label>
                    <div class="col-lg-8">
                        <select class="form-control" name="hari" id="">
                            <option value="Senin" @if($piket->hari == "Senin") selected @endif>Senin</option>
                            <option value="Selasa" @if($piket->hari == "Selasa") selected @endif>Selasa</option>
                            <option value="Rabu" @if($piket->hari == "Rabu") selected @endif>Rabu</option>
                            <option value="Kamis" @if($piket->hari == "Kamis") selected @endif>Kamis</option>
                            <option value="Jumat" @if($piket->hari == "Jumat") selected @endif>Jumat</option>
                        </select>
                    </div>
                </div>                 
                <button class="btn btn-primary"> <i class="fas fa-check"></i> Selesai</button>
            </div>            
            </form>
        </div>
    </div>
@endsection