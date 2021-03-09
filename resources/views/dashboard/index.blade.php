@extends('layouts.app')
@section('pageTitle','Dashboard')
@section('title','Dashboard')
@section('content')
<div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-users"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Siswa</h4>
                  </div>
                  <div class="card-body">
                    20
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="fas fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jadwal Piket</h4>
                  </div>
                  <div class="card-body">
                    10
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Data Siswa</h4>
                  </div>
                  <div class="card-body">
                    20
                  </div>
                </div>
              </div>
            </div>
            
          </div>
@endsection