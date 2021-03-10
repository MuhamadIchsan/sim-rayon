@extends('layouts.app')
@section('pageTitle','User')
@section('title','User')
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
                    <h5>User</h5>                                            
                </div>                
            </div>
        </div>        
        <div class="card-body">
        <a href="{{ route('user.create') }}" class="btn btn-success"> <i class="fas fa-plus"></i> Tambah User</a>
            <div class="section-title">Data User</div>            
                    <div class="table-responsive">
                      <table class="table table-sm">
                        <thead class="bg-primary text-white">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>                                                        
                            <th scope="col">Role</th>
                            <th scope="col">Rayon</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <!-- foreach -->
                        @foreach ($users as $user)
                          <tr>
                            <th scope="row">{{ $nomor++ }}</th>  
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>      
                            <td>
                              @if($user->nama_rayon)
                                {{ $user->nama_rayon }}  
                              @else
                                BUKAN PEMRAY
                              @endif
                            </td>                                                                        
                            <td>
                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-info"><i class="fas fa-edit"></i>Edit</a>
                                <form method="POST" action="{{ route('user.destroy', $user->id) }}" class="d-inline">
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