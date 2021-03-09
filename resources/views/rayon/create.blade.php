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
            
            <form action="" method="POST">
            @csrf
            <div class="card-body">                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Rayon</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control @error('') is-invalid @enderror" name="" placeholder="Nama Rayon">
                        @error('')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>                                             
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Pembimbing</label>
                    <div class="col-lg-8">
                        <select class="form-control @error('') is-invalid @enderror" name="" id="">                        
                            <!-- nama pembimbing sesuai diambil berdasarkan data pembimbing -->
                            <option value="">nama</option>
                        </select>
                    </div>
                </div>                
                <button class="btn btn-primary"> <i class="fas fa-check"></i> Selesai</button>
            </div>            
            </form>
        </div>
    </div>
@endsection