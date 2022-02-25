<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="py-12">

        <center>
            <h1 style="font-size: 200%">Fasilitas</h1>
        </center>
    </div>
   
    <div>
       
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <a class="btn btn-primary" href="{{ route('fasilitas.create') }}"> Create</a>
                </div>
            </div>
        </div>
    </div>
 
<table class="table table-bordered" >
    <tr>
        <th>No</th>
        <th>Nama Fasilitas</th>
        <th>Keterangan</th>
        <th>Image</th>
        <th>ID</th>
        <th>Action</th>
    </tr>


    @foreach ($fasilitas as $fasilitass)
    
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $fasilitass->nama_fasilitas }}</td>
        <td>{{ $fasilitass->keterangan }}</td>
        <td><img src="/image/{{ $fasilitass->image }}" width="100px"></td>
        <td>{{ $fasilitass->id }}</td>
        <td>
            <form action="{{ route('fasilitas.destroy',$fasilitass->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?');">
       
                <a class="btn btn-primary" href="{{ route('fasilitas.edit',$fasilitass->id) }}"><i class="fas fa-edit"></i></a>
 
                @csrf
                @method('DELETE')
    
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
            </form>
        </td>
    </tr>

    @endforeach

    {{!! $fasilitas->links() !!}}
</table>
  

    </div>
</x-app-layout>
