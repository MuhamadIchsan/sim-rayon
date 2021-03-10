@extends('layouts.app')
@section('pageTitle','Rayon')
@section('title','Rayon')
@section('content')
    <div class="container-fluid">
        <a href="{{ route('rayon.index') }}" class="btn btn-danger mb-4"><i class="fas fa-arrow-left"></i>    Kembali</a>
        <div class="card">
            <div class="card-header">
                <h5>Tambah Rayon</h5>
            </div>
            
            <form action="{{ route('rayon.store') }}" method="POST">
            @csrf
            <div class="card-body">                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Rayon</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control @error('nama_rayon') is-invalid @enderror" name="nama_rayon" placeholder="Nama Rayon">
                        @error('nama_rayon')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>                         
                <button class="btn btn-primary"> <i class="fas fa-check"></i> Selesai</button>
            </div>            
            </form>
        </div>
    </div>
@endsection