<x-app-layout>
    <x-auth-card>
    <div class="py-12">
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('fasilitas.store') }}" enctype="multipart/form-data">
            @csrf
            <!-- Nama fasilitas-->
            <div>
                <x-label for="nama_fasilitas" :value="__('Nama fasilitas')" />
                <x-input id="nama_fasilitas" class="block mt-1 w-full" type="text" name="nama_fasilitas"  />
            </div>

            <!-- keterangan -->
            <div class="mt-4">
                <x-label for="keterangan" :value="__('Keterangan')" />
                <x-input id="keterangan" class="block mt-1 w-full" type="text" name="keterangan"  />
            </div>
            
            <!-- image -->
            <div class="mt-4">
                <x-label for="image" :value="__('Image')" />
                <x-input id="image" class="block mt-1 w-full" type="file" name="image" />
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

