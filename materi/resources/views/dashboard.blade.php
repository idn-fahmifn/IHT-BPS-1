<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container mx-auto px-4 py-8">
            <h1 class="text-2xl font-bold mb-6 text-center">Food</h1>

            <!-- Grid Container -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://blog.bankmega.com/wp-content/uploads/2022/11/Makanan-Khas-Tradisional.jpg" alt="Avatar" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h2 class="font-bold text-lg">John Doe</h2>
                        <p class="text-gray-600">Web Developer</p>
                        <button class="mt-4 w-full text-white bg-blue-500 hover:bg-blue-600 py-2 px-4 rounded">View Profile</button>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://blog.bankmega.com/wp-content/uploads/2022/11/Makanan-Khas-Tradisional.jpg" alt="Avatar" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h2 class="font-bold text-lg">Jane Smith</h2>
                        <p class="text-gray-600">UI/UX Designer</p>
                        <button class="mt-4 w-full text-white bg-blue-500 hover:bg-blue-600 py-2 px-4 rounded">View Profile</button>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://blog.bankmega.com/wp-content/uploads/2022/11/Makanan-Khas-Tradisional.jpg" alt="Avatar" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h2 class="font-bold text-lg">Michael Johnson</h2>
                        <p class="text-gray-600">Project Manager</p>
                        <button class="mt-4 w-full text-white bg-blue-500 hover:bg-blue-600 py-2 px-4 rounded">View Profile</button>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://blog.bankmega.com/wp-content/uploads/2022/11/Makanan-Khas-Tradisional.jpg" alt="Avatar" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h2 class="font-bold text-lg">Sarah Wilson</h2>
                        <p class="text-gray-600">Data Scientist</p>
                        <button class="mt-4 w-full text-white bg-blue-500 hover:bg-blue-600 py-2 px-4 rounded">View Profile</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>