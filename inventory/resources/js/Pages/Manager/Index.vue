<script setup>
import Magnify from '@/Components/Magnify.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Manager Room
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 flex justify-between align-center">

                        <!-- kiri -->
                        <div>
                            <h1 class="text-lg font-semibold text-gray-900">Manager Room</h1>
                            <span class="text-sm text-gray-500">List Manager</span>
                        </div>
                        
                        <!-- Kanan -->
                        <div>
                            <a href="#" class="text-white bg-red-700 py-2 px-4 hover:bg-red-500 rounded-md">Create
                                new</a>
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="flex flex-col justify-start sm:flex-row mt-6">
                            <div class="relative text-sm text-gray-800 col-span-3">
                                <div
                                    class="absolute pl-2 left-0 top-0 bottom-0 flex items-center pointer-events-none text-gray-500">
                                    <Magnify />
                                </div>

                                <input type="text" v-model="searchTerm" placeholder="Search manager room" id="search"
                                    class="block rounded-lg border-0 py-2 pl-10 text-gray-900 ring-1 ring-inset ring-gray-200 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                            </div>
                        </div>

                        <table class="table-auto w-full border mt-4">
                            <thead class="bg-red-100">
                                <tr>
                                    <th class="border p-2">Name</th>
                                    <th class="border p-2">Email</th>
                                    <th class="border p-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border p-2">Fahmi</td>
                                    <td class="border p-2">fahmi@test.com</td>
                                    <td class="border p-2 text-center">
                                        <Link class="text-red-600 hover:text-red-900">
                                        Detail
                                        </Link>
                                        <button class="ml-2 text-red-600 hover:text-red-900">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </AuthenticatedLayout>
</template>
