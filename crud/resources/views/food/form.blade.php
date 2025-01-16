<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            Data Menu
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            Form menambahkan menu
        </p>
    </header>

    <form method="post" action="{{route('food.store')}}" enctype="multipart/form-data" class="mt-6 space-y-6">
        @csrf
        <!-- input nama menu -->
        <div>
            <x-input-label for="name" :value="__('Nama Menu')" />
            <x-text-input id="nama_makanan" name="nama_makanan" type="text" class="mt-1 block w-full p-2 border border-red-300" required autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('nama_makanan')" />
        </div>

        <div>
            <x-input-label for="name" :value="__('Jenis Menu')" />
            <select name="id_menu" class="mt-1 block w-full p-2 border border-red-300 rounded-md" id="id_menu" required>
                <option value="">Jenis Menu</option>
                @foreach ($menu as $item)
                <option value="{{$item->id}}">{{$item->nama_menu}}</option>
                @endforeach
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('nama_makanan')" />
        </div>

        <!-- input thumbnail -->
        <div>
            <x-input-label for="gambar" :value="__('Gambar')" />
            <x-text-input id="gambar" name="gambar" type="file" class="mt-1 block w-full p-2 border border-red-300" required autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('gambar')" />
        </div>

        <!-- input harga -->
        <div>
            <x-input-label for="harga" :value="__('Harga')" />
            <x-text-input id="harga" name="harga" type="text" class="mt-1 block w-full p-2 border border-red-300" required autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('harga')" />
        </div>

        <!-- input nama menu -->
        <div>
            <x-input-label for="deskripsi" :value="__('Deskripsi')" />
            <!-- <x-input-textarea id="deskripsi" name="deskripsi"  class="mt-1 block w-full p-2 border border-red-300" required autofocus></x-input-textarea> -->
            <!-- <x-text-input id="deskripsi" name="deskripsi" type="text" class="mt-1 block w-full p-2 border border-red-300" required autofocus /> -->
            <textarea name="deskripsi" class="mt-1 block w-full p-2 border border-red-300 rounded-md"></textarea>
            <x-input-error class="mt-2" :messages="$errors->get('deskripsi')" />
        </div>

        <div class="flex items-center gap-4">
            <x-btn-red>{{ __('Simpan') }}</x-btn-red>
        </div>
    </form>
</section>