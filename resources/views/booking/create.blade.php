@extends('layouts.home')
@section('content')

    <header class="bg-white text-center py-5 mb-5">
        <div class="container">
          <h1 class="fw-light text-dark">Booking Room hotel hebat</h1>
        </div>
    </header>

<div class="container">
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
       
    {{-- Form check in and checkout --}}
    <form action="{{ route('booking.store')}} " method="POST">
        @csrf
        <div class="mb-3">
          <label for="tgl_check_in" class="form-label" >Check-In Date</label>
          <input type="date" class="form-control" id="tgl_check_in" name="tgl_check_in">
        </div>
        <div class="mb-3">  
            <label for="tgl_check_out" class="form-label">Check-Out Date</label>
            <input type="date" class="form-control" id="tgl_check_out" name="tgl_check_out">
        </div>
        <div class="mb-3">
            <label for="jumlah_kamar" class="form-label">Number Of rooms</label>
            <select class="form-control" name="jumlah_kamar" id="jumlah_kamar">
                    <option value="" hidden></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
        </div>
       

        {{-- Form Order --}}
        <div class="mb-3">
          <label for="nama_pemesan" class="form-label">Order Name</label>
          <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan" >
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="no_hp" class="form-label">No Handphone</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp">
        </div>
        <div class="mb-3">
            <label for="nama_tamu" class="form-label">Guest name</label>
            <input type="text" class="form-control" id="nama_tamu" name="nama_tamu" >
        </div>
        <div class="mb-3">
            <label for="tipe_kamar_id" class="form-label">Room type</label>
            <select class="form-control" name="tipe_kamar_id" id="tipe_kamar_id">
                <option value="" hidden></option>
                <option value=""></option>
                @foreach($TipeKamar as $TipeKamars)
                <option value="{{$TipeKamars->id}}">{{$TipeKamars->tipe_kamar}}</option>
                @endforeach
            </select>

           </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

  </div>


  @endsection