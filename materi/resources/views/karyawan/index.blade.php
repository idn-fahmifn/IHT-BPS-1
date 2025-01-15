<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Halaman Karyawan
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 flex w-full justify-between">
                    <div class="text-gray-900">
                        Data Karyawan
                    </div>
                    <div>
                        <a href="#" class="bg-red-600 text-white px-2 py-2 rounded-md">Tambah Data</a>
                    </div>
                </div>

                <div class="p-6">
                    <div class="overflow-x-auto">
                        <table class="min-w-full table-auto border-collapse border border-gray-200 rounded-md">
                            <thead>
                                <tr class="bg-red-400">
                                    <th class="px-4 py-2 text-left">Nama Lengkap</th>
                                    <th class="px-4 py-2 text-left">Umur</th>
                                    <th class="px-4 py-2 text-left">Jabatan</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($data as $item)
                                <tr class="border-t border-gray-200">
                                    <td class="px-4 py-2">{{$item->nama}}</td>
                                    <td class="px-4 py-2">{{$item->umur}}</td>
                                    <td class="px-4 py-2">{{$item->jabatan}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="mt-4">
                            @include('karyawan.paginate')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>