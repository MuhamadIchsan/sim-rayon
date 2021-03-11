@extends('layouts.app')
@section('pageTitle','Absen Rayon')
@section('title','Absen Rayon')
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
                    <h5>Absen Rayon</h5>                        
                    <p>{{ now()->format('d,M Y') }}</p> 
                </div>                
            </div>
        </div>        
        <div class="card-body">
            <div class="section-title">Absen Rayon</div>            
                    <div class="table-responsive">
                      <table class="table table-sm">
                        <thead class="bg-primary text-white">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">NIS</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Rayon</th>                            
                            <th scope="col">Tanggal</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>

                        <!-- foreach -->
                        @foreach ($absenrayons as $data)
                          <tr>
                            <th scope="row">{{ $nomor++ }}</th>
                            <td>{{ $data->nis }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->user->nama_rayon }}</td>
                            <td>{{ $data->tanggal }}</td>                            
                            <td>{{ $data->kehadiran }}</td>    
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