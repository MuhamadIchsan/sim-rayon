@extends('layouts.app')
@section('pageTitle','Dashboard')
@section('title','Dashboard')
@section('content')
<div class="row">
    <div class="col-md-12 p-2">
      <div class="card">
        <div class="card-body">
          <h3><u>Selamat Datang {{ auth()->user()->name }}</u></h3>
        </div>
      </div>
    </div>
</div>
@endsection