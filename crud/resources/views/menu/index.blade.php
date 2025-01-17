<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Jenis Menu') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container mx-auto px-4 py-8">

            <div class="flex justify-between bg-white mb-6 p-6 rounded-lg">
                <div class="p-0 mb-2">
                    <h1 class="text-2xl font-bold">Jenis Menu</h1>
                    <span class="text-gray-500 mt-4">Daftar jenis menu makanan dan lainnya.</span>
                </div>

                <div class="p-6">
                    <a href="{{route('menu.create')}}" class="bg-red-500 p-2 rounded-lg text-white hover:bg-red-700">Tambah Jenis Menu</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>