<x-app-layout>
    <x-slot name="header">
    </x-slot>

    
        <div class="py-12">
    
            <center>
                <h1 style="font-size: 200%">User Access</h1>
            </center>
        </div>
       
        <div>
           
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <a class="btn btn-primary" href="{{ route('user_role_access.create') }}"> Create</a>
                    </div>
                </div>
            </div>
        </div>
     
    <table class="table table-bordered" >
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
    
    
        @foreach ($userAccess as $userAccesss)
        
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $userAccesss->name }}</td>
            <td>{{ $userAccesss->email }}</td>
            <td>{{ $userAccesss->role }}</td>

            <td>
                <form action="{{ route('user_role_access.destroy',$userAccesss->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?');">
           
                    <a class="btn btn-primary" href="{{ route('user_role_access.edit',$userAccesss->id) }}"><i class="fas fa-edit"></i></a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                </form>
            </td>
        </tr>
    
        @endforeach 
    
    </table>
      
    
        </div>
    </x-app-layout>
    