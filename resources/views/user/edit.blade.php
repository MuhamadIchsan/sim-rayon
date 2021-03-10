@extends('layouts.app')
@section('pageTitle','Edit User')
@section('title','User')
@section('content')
    <div class="container-fluid">
        <a href="{{ route('piket.index') }}" class="btn btn-danger mb-4"><i class="fas fa-arrow-left"></i>    Kembali</a>
        <div class="card">
            <div class="card-header">
                <h5>Edit User</h5>
            </div>
            
            <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="card-body">                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $user->name }}" name="name" placeholder="nama Siswa">
                        @error('name')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>             
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-lg-8">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" placeholder="E-mail">
                        @error('email')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>        
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Role</label>
                    <div class="col-lg-8">
                        <select class="form-control" name="role" id="">
                            <option value="admin" @if($user->role == "admin") selected @endif>admin</option>
                            <option value="guru"  @if($user->role == "guru") selected @endif>guru</option>
                            <option value="pemray"  @if($user->role == "pemray") selected @endif>pemray</option>
                            <option value="bkk"  @if($user->role == "bkk") selected @endif>bkk</option>
                            <option value="kepsek"  @if($user->role == "kepsek") selected @endif>kepsek</option>                            
                        </select>
                    </div>
                </div>                                                      
                <button class="btn btn-primary"> <i class="fas fa-check"></i> Selesai</button>
            </div>            
            </form>
        </div>
    </div>
@endsection