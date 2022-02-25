<x-app-layout>
    <x-slot name="header">
    </x-slot>

    
        <div class="py-12">
    
            <center>
                <h1 style="font-size: 200%">Tipe Kamar</h1>
            </center>
        </div>
       
        <div>
           
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <a class="btn btn-primary" href="{{ route('reservasi.create') }}"> Create</a>
                    </div>
                </div>
            </div>
        </div> 
     
    <table class="table table-bordered" >
        <tr>
            <th>No</th>
            <th>Nama Tamu</th>
            <th>TGL Check IN</th>
            <th>TGl Check OUT</th>
            <th>ID Tamu</th>

            <th>Action</th>
        </tr>
    
        @foreach ($reservasi as $reservasii)
        
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $reservasii->nama_tamu }}</td>
            <td>{{ $reservasii->tgl_check_in }}</td>
            <td>{{ $reservasii->tgl_check_out }}</td>
            <td>{{ $reservasii->id }}</td>


            <td>
                <form action="{{ route('reservasi.destroy',$reservasii->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?');">
           
                    <a class="btn btn-primary" href="{{ route('reservasi.edit',$reservasii->id) }}"><i class="fas fa-edit"></i></a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                </form>
            </td>
        </tr>
    
        @endforeach 
    
        {{-- {{!! $tipeKamar->links() !!}} --}}
    </table>
      
    
        </div>
    </x-app-layout>
    