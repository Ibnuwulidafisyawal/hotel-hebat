@extends('layouts.home')

@section('content')
<form action="" method="POST">


    <header class="bg-white text-center py-5 mb-5">
        <div class="container">
          <h1 class="fw-light text-dark">Room Hotel hebat</h1>
        </div>
    </header>


<div class="container">

    @foreach ($TipeKamar as $TipeKamars)
        
    <div class="row col-md-auto justify-content-md-center">
      <div class="col-xl-9 col-md-6 mb-4">
        <div class="card border-0 shadow">
          <img src="/image/{{ $TipeKamars->image }}" class="card-img-top" alt="..." >
          <div class="card-body text-center">
            <h5 class="card-title mb-0"> Room type : {{$TipeKamars->tipe_kamar}}</h5>
            <div class="card-title mb-0"> Number of rooms : {{$TipeKamars->jumlah_kamar}}</div>
          </div>
        </div>
      </div>
      
  @endforeach

  @endsection