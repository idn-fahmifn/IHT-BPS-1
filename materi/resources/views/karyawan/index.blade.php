<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Halaman Karyawan
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Data Karyawan
                </div>

                <div class="p-6">
                    <table class="table-auto w-full p-6 border border-slate-500">
                        <thead class="border border-slate-500 ">
                            <tr class="border border-slate-500">
                                <th>Nama</th>
                                <th>Umur</th>
                                <th>Jabatan</th>
                            </tr>
                        </thead>
                        <tbody class="border border-slate-500">
                            <tr class="border border-slate-500">
                                <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                                <td>Malcolm Lockyer</td>
                                <td>1961</td>
                            </tr>
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
</x-app-layout>