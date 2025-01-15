<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            Data Karyawan
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            Form Menambahkan data karyawan
        </p>
    </header>

    <form method="post" action="{{route('karyawan.post')}}" class="mt-6 space-y-6">
        @csrf
        <div>
            <x-input-label for="name" :value="__('Nama Lengkap')" />
            <x-text-input id="nama" name="nama" type="text" class="mt-1 block w-full" required autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('nama')" />
        </div>

        <div>
            <x-input-label for="umur" :value="__('Umur')" />
            <x-text-input id="umur" name="umur" type="number" class="mt-1 block w-full" required autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('umur')" />
        </div>

        <div>
            <x-input-label for="jabatan" :value="__('Jabatan')" />
            <x-text-input id="jabatan" name="jabatan" type="text" class="mt-1 block w-full" required autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('jabatan')" />
        </div>

        <div>
            <x-input-label for="nik" :value="__('NIK')" />
            <x-text-input id="nik" name="nik" type="text" class="mt-1 block w-full" required autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('nama')" />
        </div>

        <div>
            <x-input-label for="alamat" :value="__('Alamat')" />
            <x-text-input id="alamat" name="alamat" type="text" class="mt-1 block w-full" required autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('nama')" />
        </div>


        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Simpan') }}</x-primary-button>
        </div>
    </form>
</section>
