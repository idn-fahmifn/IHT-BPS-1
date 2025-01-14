<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            Data Karyawan
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            Form Menambahkan data karyawan
        </p>
    </header>

    <form method="post" action="#" class="mt-6 space-y-6">
        @csrf

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="nama" name="nama" type="text" class="mt-1 block w-full" required autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('nama')" />
        </div>


        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Simpan') }}</x-primary-button>
        </div>
    </form>
</section>
