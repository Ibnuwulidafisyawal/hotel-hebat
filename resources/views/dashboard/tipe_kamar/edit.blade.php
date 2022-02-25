<x-app-layout>
    <x-auth-card>
    <div class="py-12">
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('tipe_kamar.update',$tipeKamar->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <!-- Nama Tipe Kamar-->
            <div>
                <x-label for="tipe_kamar" :value="__('Nama Tipe kamar')" />
                <x-input id="tipe_kamar" class="block mt-1 w-full" type="text" name="tipe_kamar" value="{{$tipeKamar->tipe_kamar}}" />
            </div>

            <!-- Jumlah Kamar -->
            <div class="mt-4">
                <x-label for="jumlah_kamar" :value="__('Jumlah kamar')" />
                <x-input id="jumlah_kamar" class="block mt-1 w-full" type="text" name="jumlah_kamar" value="{{$tipeKamar->jumlah_kamar}}" />    
            </div>
            
            <!-- image -->
            <div class="mt-4">
                <x-label for="image" :value="__('Image')" />
                <x-input id="image" class="block mt-1 w-full" type="file" name="image" />
                    <img src="/image/{{ $tipeKamar->image }}" width="300px">
            </div>

             <!-- Fasilitas ID -->
             <div class="mt-4">
                <x-label for="fasilitas_id" :value="__('Fasilitas ID')" />
                <select class="form-control" name="fasilitas_id" id="fasilitas_id">
                    <option value="" hidden></option>
                    <option value=""></option>
                    @foreach($fasilitas as $fasilitass)
                    <option value="{{$fasilitass->id}}">{{$fasilitass->nama_fasilitas}}</option>
                    @endforeach
                </select>
            </div>
            

            <div class="flex items-center justify-end mt-4">

                <x-button class="ml-4">
                    {{ __('Submit') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
    </div>
</x-app-layout>

