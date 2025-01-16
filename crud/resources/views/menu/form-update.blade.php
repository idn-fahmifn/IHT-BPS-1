<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            Data Jenis Menu
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            Form menambahkan data jenis makanan
        </p>
    </header>

    <form method="post" action="{{route('menu.update', $data->id)}}" enctype="multipart/form-data" class="mt-6 space-y-6">
        @csrf
        @method('put')
        <!-- input nama menu -->
        <div>
            <x-input-label for="name" :value="__('Nama Jenis Menu')" />
            <x-text-input id="nama_menu" name="nama_menu" type="text" value="{{$data->nama_menu}}" class="mt-1 block w-full p-2 border border-red-300" required autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('nama_menu')" />
        </div>

        <!-- input thumbnail -->
        <div>
            <x-input-label for="thumbnail" :value="__('Thumbnail')" />
            <x-text-input id="thumbnail" name="thumbnail" value="{{$data->thumbnail}}" type="file" class="mt-1 block w-full p-2 border border-red-300" autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('thumbnail')" />
        </div>

        <div class="flex items-center gap-4">
            <!-- jangan dikutin -->
            <x-btn-red>{{ __('Simpan') }}</x-btn-red>
        </div>
    </form>
    <form action="{{route('menu.destroy', $data->id)}}" class="mt-4 p-1" method="post">
        @csrf
        {{method_field('delete')}}
        <x-primary-button onclick="return confirm('Hapuss nihh??')">{{ __('Hapus') }}</x-primary-button>
    </form>
</section>