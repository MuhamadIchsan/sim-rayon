@extends('layouts.app')
@section('pageTitle','Data Rayon')
@section('title','Data Rayon')
@section('content')
<div class="container-fluid">

    @if(session('notif'))
    <div class="alert alert-success alert-dismissible show fade">
        <div class="alert-body">
        <button class="close" data-dismiss="alert">
            <span>&times;</span>
        </button>
        {{ session('notif') }}
        </div>
    </div>
    @endif
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h5>Data Rayon</h5>                                            
                </div>                
            </div>
        </div>        
        <div class="card-body">
        <a href="{{ route('rayon.create') }}" class="btn btn-success"> <i class="fas fa-plus"></i> Tambah Rayon</a>
            <div class="section-title">List Rayon</div>            
                    <div class="table-responsive">
                      <table class="table table-sm">
                        <thead class="bg-primary text-white">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Rayon</th>                      
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>

                        <!-- foreach -->
                        @foreach ($rayons as $rayon)
                        <tr>
                            <th scope="row">{{ $nomor++ }}</th>                             
                            <td>{{ $rayon->nama_rayon }}</td>                   
                            <td>                                
                                <form action="{{ route('rayon.destroy', $rayon->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger"><i class="fas fa-trash"></i>Hapus</button>
                                </form>
                            </td>
                          </tr>    
                        @endforeach
                        <!-- endforeach -->

                        </tbody>
                      </table>
                    </div>
        </div>
    </div>
</div>
@endsection