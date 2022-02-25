<x-app-layout>
    <x-slot name="header">
    </x-slot>

    
        <div class="py-12">
    
            <center>
                <h1 style="font-size: 200%">Pemesanan</h1>
            </center>
        </div>
       
        <div>
           
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <a class="btn btn-primary" href="{{ route('pemesanan.create') }}"> Create</a>
                    </div>
                </div>
            </div>
        </div>
     
    <table class="table table-bordered" >
        <tr>
            <th>No</th>
            <th>Nama Pemesan</th>
            <th>email</th>
            <th>No hp </th>
            <th>nama Reservasi</th>
            <th>Tipe Kamar</th>
            <th>Jumlah Kamar</th>
            <th>Action</th>
        </tr>
    
    
        @foreach ($pemesanan as $pemesanann)
        
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $pemesanann->nama_pemesan }}</td>
            <td>{{ $pemesanann->email }}</td>
            <td>{{ $pemesanann->no_hp }}</td>
            <td>{{ $pemesanann->reservasi_id }}</td>
            <td>{{ $pemesanann->tipe_kamar_id }}</td>
            <td>{{ $pemesanann->jumlah_kamar }}</td>



            <td>
                <form action="{{ route('pemesanan.destroy',$pemesanann->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?');">
           
                    <a class="btn btn-primary" href="{{ route('pemesanan.edit',$pemesanann->id) }}"><i class="fas fa-edit"></i></a>
     
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
    