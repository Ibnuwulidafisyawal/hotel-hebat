@extends('layouts.home')

@section('content')


    <header class="bg-white text-center py-5 mb-5">
        <div class="container card " style="width: 55%;">
          <h1 class="fw-light text-dark">Proof Of Booking</h1>
          <div class="d-flex justify-content-center" >
            <strong>

                <div class="mt-2">
                    <span class="text-dark"> Check in</span>
                    <span class="text-dark">:</span>
                    <span class="text-success">  </span>
                </div>
                

                <div class="mt-2">
                    <span class="text-dark" > Check out</span>
                    <span class="text-dark">:</span>
                    <span class="text-success"></span>
                </div>

                <div class="mt-2">
                    <span class="text-dark" >Total of room</span>
                    <span class="text-dark">:</span>
                    <span class="text-success"></span>
                </div>
                
                <div class="mt-2">
                    <span class="text-dark" >Order name</span>
                    <span class="text-dark">:</span>
                    <span class="text-success"></span>
                </div>
                
                <div class="mt-2">
                    <span class="text-dark" >Email</span>
                    <span class="text-dark">:</span>
                    <span class="text-success"></span>
                </div>
                
                <div class="mt-2">
                    <span class="text-dark" >No HP</span>
                    <span class="text-dark">:</span>
                    <span class="text-success"></span>
                </div>
                
                <div class="mt-2">
                    <span class="text-dark" >Guest name</span>
                    <span class="text-dark">:</span>
                    <span class="text-success"></span>
                </div>

                <div class="mt-2">
                    <span class="text-dark" >Room type</span>
                    <span class="text-dark">:</span>
                    <span class="text-success"></span>
                </div>

                <footer class="d-flex justify-content-center">
                    <strong>
                        <small class="text-danger">Please Screenshoot Proof Of Order</small>
                    </strong>
                </footer>
                

            </strong>
           
         
        </div>
        </div>
    </header>

{{-- <div class="container">

        <div class="container-fluid d-flex justify-content-center position-absolute" style="top:30%; ">
            <div class="card " style="width:30%; height:450px; border-color:grey; border-radius:10px;">
    
    
            <div class="d-flex justify-content-center">
                <h3>Proof Of Booking</h3>
            </div>
    
                <form action="{{route('bookingPemesanan')}}" method="GET">
    
                <div class="d-flex justify-content-start mt-3">
                    <strong>
    
                        <div class="mt-2">
                            <span class="text-primary">Nis</span>
                            <span class="text-primary">:</span>
                            <span class="text-success">  </span>
                        </div>
                        
    
                        <div class="mt-2">
                            <span class="text-primary" >Nama</span>
                            <span class="text-primary">:</span>
                            <span class="text-success"></span>
                        </div>
    
                        <div class="mt-2">
                            <span class="text-primary" >Tanggal Dan Kehadiran</span>
                            <span class="text-primary">:</span>
                            <span class="text-success"></span>
                        </div>
                        
    
                    </strong>
                   
                 
                </div>
    
              
                <div class="pull-right" style="margin-top: -18%; margin-margin-right:70%; width:40%;">
                    <a class="btn btn-secondary" href="{{ route('absensi.student_home.index') }}"><i class="bi bi-arrow-left-circle"></i> Home</a>
                </div>
    
            </form>
    
            <footer class="d-flex justify-content-center">
                <strong>
                    <small class="text-danger">Please Screenshoot Proof Of Order</small>
                </strong>
            </footer>
    
        </div>
          </div>
        </div> --}}

  @endsection