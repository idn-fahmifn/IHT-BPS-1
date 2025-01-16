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

            <!-- Grid Container -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Card 1 -->

                @foreach ($data as $item)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="{{asset('storage/images/thumbnail-menu/'.$item->thumbnail)}}" alt="Menu Makanan" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h2 class="font-bold text-lg">{{$item->nama_menu}}</h2>
                        <p class="text-gray-600">23 Menu</p>
                        <a href="{{route('menu.show', $item->id)}}" class="mt-4 flex items-center justify-center px-4 py-2 w-full text-white bg-red-500 hover:bg-red-600 py-2 px-4 rounded">Detail</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>