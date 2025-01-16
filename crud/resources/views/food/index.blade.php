<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detail Menu
        </h2>
    </x-slot>


    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex w-full justify-between">
                    <div class="text-gray-900">
                        Data Menu
                    </div>
                    <div>
                        <a href="{{route('food.create')}}" class="bg-red-600 text-white px-2 py-2 rounded-md">Tambah Data</a>
                    </div>
                </div>

                <div class="p-6">
                    <div class="overflow-x-auto">
                        <table class="min-w-full table-auto border-collapse border border-gray-200 rounded-md">
                            <thead>
                                <tr class="bg-red-400">
                                    <th class="px-4 py-2 text-left">Nama Makanan</th>
                                    <th class="px-4 py-2 text-left">Harga</th>
                                    <th class="px-4 py-2 text-left">Kategori</th>
                                    <th class="px-4 py-2 text-left">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($data as $item)
                                <tr class="border-t border-gray-200">
                                    <td class="px-4 py-2">{{$item->nama_makanan}}</td>
                                    <td class="px-4 py-2">Rp. {{$item->harga}}</td>
                                    <td class="px-4 py-2">{{$item->menu->nama_menu}}</td>
                                    <td class="px-4 py-2">
                                        <a href="{{route('food.show', $item->id)}}" class="text-red-600">Detail</a>
                                        <a href="#" class="text-red-600 ml-4">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>