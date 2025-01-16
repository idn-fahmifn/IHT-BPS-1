<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$data->nama_makanan}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex w-full justify-between">
                    <h4 class="text-gray-900">
                        {{$data->nama_makanan}}
                    </h4>
                </div>

                <div class="p-6">
                    <div class="overflow-x-auto">
                        @include('food.form-update')
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>