@extends('layouts.app')
@section('pageTitle','Jadwal Piket Siswa')
@section('title','Jadwal Piket')
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
                    <h5>Jadwal Piket</h5>                        
                    <p>{{ now()->format('d,M Y') }}</p> 
                </div>                
            </div>
        </div>        
        <div class="card-body">
        <a href="{{ route('piket.create') }}" class="btn btn-success"> <i class="fas fa-plus"></i> Tambah Siswa</a>
            <div class="section-title">Data Siswa</div>            
                    <div class="table-responsive">
                      <table class="table table-sm">
                        <thead class="bg-primary text-white">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">NIS</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Rayon</th>                            
                            <th scope="col">Hari</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>

                        <!-- foreach -->
                          <tr>
                            <th scope="row">1</th>
                            <td>11806718</td>
                            <td>Mark</td>
                            <td>Cisarua 1</td>
                            <td>Selasa</td>                            
                            <td>
                                <a href="" class="btn btn-info"><i class="fas fa-edit"></i>Edit</a>
                                <form action="" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger"><i class="fas fa-trash"></i>Hapus</button>
                                </form>
                            </td>
                          </tr>    
                        <!-- endforeach -->

                        </tbody>
                      </table>
                    </div>
        </div>
    </div>
</div>
@endsection