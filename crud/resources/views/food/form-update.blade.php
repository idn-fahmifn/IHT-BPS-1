<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            Edit Menu
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            Form mengubah data menu
        </p>
    </header>

    <form method="post" action="{{route('food.update', $data->id)}}" enctype="multipart/form-data" class="mt-6 space-y-6">
        @csrf
        @method('put')
        <!-- input nama menu -->
        <div>
            <x-input-label for="name" :value="__('Nama Menu')" />
            <x-text-input id="nama_makanan" name="nama_makanan" value="{{$data->nama_makanan}}" type="text" class="mt-1 block w-full p-2 border border-red-300" required autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('nama_makanan')" />
        </div>

        <div>
            <x-input-label for="name" :value="__('Jenis Menu')" />
            <select name="id_menu" class="mt-1 block w-full p-2 border border-red-300 rounded-md" id="id_menu" required>
                <option value="{{$data->id_menu}}">{{$data->menu->nama_menu}}</option>
                @foreach ($menu as $item)
                <option value="{{$item->id}}">{{$item->nama_menu}}</option>
                @endforeach
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('nama_menu')" />
        </div>

        <!-- input thumbnail -->
        <div>
            <x-input-label for="gambar" :value="__('Gambar')" />
            <x-text-input id="gambar" name="gambar" type="file" value="{{$data->gambar}}" class="mt-1 block w-full p-2 border border-red-300" autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('gambar')" />
        </div>

        <!-- input harga -->
        <div>
            <x-input-label for="harga" :value="__('Harga')" />
            <x-text-input id="harga" name="harga" value="{{$data->harga}}" type="text" class="mt-1 block w-full p-2 border border-red-300" required autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('harga')" />
        </div>

        <!-- input nama menu -->
        <div>
            <x-input-label for="deskripsi" :value="__('Deskripsi')" />
            <textarea name="deskripsi" class="mt-1 block w-full p-2 border border-red-300 rounded-md">{{$data->deskripsi}}</textarea>
            <x-input-error class="mt-2" :messages="$errors->get('deskripsi')" />
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