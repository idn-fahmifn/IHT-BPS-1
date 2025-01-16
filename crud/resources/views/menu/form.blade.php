<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            Data Jenis Menu
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            Form menambahkan data jenis makanan
        </p>
    </header>

    <form method="post" action="{{route('menu.store')}}" enctype="multipart/form-data" class="mt-6 space-y-6">
        @csrf
        <!-- input nama menu -->
        <div>
            <x-input-label for="name" :value="__('Nama Jenis Menu')" />
            <x-text-input id="nama_menu" name="nama_menu" type="text" class="mt-1 block w-full p-2 border border-red-300" required autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('nama_menu')" />
        </div>

        <!-- input thumbnail -->
        <div>
            <x-input-label for="thumbnail" :value="__('Thumbnail')" />
            <x-text-input id="thumbnail" name="thumbnail" type="file" class="mt-1 block w-full p-2 border border-red-300" required autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('thumbnail')" />
        </div>

        <div class="flex items-center gap-4">
            <x-btn-red>{{ __('Simpan') }}</x-btn-red>
        </div>
    </form>
</section>