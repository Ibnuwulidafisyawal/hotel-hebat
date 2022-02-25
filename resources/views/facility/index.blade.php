@extends('layouts.home')

@section('content')
<form action="" method="POST">


    <header class="bg-white text-center py-5 mb-5">
        <div class="container">
          <h1 class="fw-light text-dark">Hotel public facility</h1>
        </div>
    </header>

    <form action="{{ route('home.index') }}" method="GET">


<div class="container">

   
        <div class="container">
        
            @foreach ($fasilitas as $fasilitass)
                
            <div class="row col-md-auto justify-content-md-center">
              <div class="col-xl-9 col-md-6 mb-4">
                <div class="card border-0 shadow">
                  <img src="/image/{{ $fasilitass->image }}" class="card-img-top" alt="..." >
                  <div class="card-body text-center">
                    <h5 class="card-title mb-0"> Facility name : {{$fasilitass->nama_fasilitas}}</h5>
                    <div class="card-title mb-0"> Description :{{$fasilitass->keterangan}}</div>
                  </div>
                </div>
              </div>
              
          @endforeach
        </form>
        
          @endsection
