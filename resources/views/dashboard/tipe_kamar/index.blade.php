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
                        <a class="btn btn-primary" href="{{ route('tipe_kamar.create') }}"> Create</a>
                    </div>
                </div>
            </div>
        </div>
     
    <table class="table table-bordered" >
        <tr>
            <th>No</th>
            <th>Tipe Kamar</th>
            <th>Jumlah Kamar</th>
            <th>Image </th>
            <th>Fasilitas ID</th>
            <th>Action</th>
        </tr>
    
    
        @foreach ($tipeKamar as $tipeKamars)
        
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $tipeKamars->tipe_kamar }}</td>
            <td>{{ $tipeKamars->jumlah_kamar }}</td>
            <td><img src="/image/{{ $tipeKamars->image }}" width="100px"></td>
            <td>{{ $tipeKamars->fasilitas_id }}</td>

            <td>
                <form action="{{ route('tipe_kamar.destroy',$tipeKamars->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?');">
           
                    <a class="btn btn-primary" href="{{ route('tipe_kamar.edit',$tipeKamars->id) }}"><i class="fas fa-edit"></i></a>
     
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
    