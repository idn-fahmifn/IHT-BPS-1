<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2 gap-6">
                <!-- Card 1 -->
                <div class="bg-blue-200 rounded-lg shadow-md overflow-hidden">
                    <div class="flex justify-between">
                        <div class="p-6">
                            <h2 class="font-bold text-xl">
                                23
                            </h2>
                            <p class="text-gray-600">Total Kategori</p>
                        </div>
                        <img src="https://dressfair.pk/image/menu/category.png" width="100" alt="Image-Icon">
                    </div>
                </div>

                <div class="bg-red-200 rounded-lg shadow-md overflow-hidden">
                    <div class="flex justify-between">
                        <div class="p-6">
                            <h2 class="font-bold text-xl">
                                23
                            </h2>
                            <p class="text-gray-600">Total Kategori</p>
                        </div>
                        <img src="https://png.pngtree.com/png-vector/20230801/ourmid/pngtree-fresh-food-icon-with-bread-and-produce-vector-png-image_6829151.png" width="100" alt="Image-Icon">
                    </div>
                </div>
            </div>
        </div>
        <div class="py-6 px-8">
            <h4 class="text-gray-600 font-semibold">Daftar Menu</h4>
        </div>
    </div>
</x-app-layout>