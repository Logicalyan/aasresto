@extends('layouts.app')


@section('content')

@include('components.navbar')
@include('components.sidebar')
    <main class="p-4 md:ml-64 h-auto pt-20">
        <div class="md:w-3/4 2xl:w-2/5">
            <!-- Modal body -->
            <div class="p-4 md:p-5 md:w-full">

                <form class="flex gap-2 w-full" enctype="multipart/form-data"
                    action="{{ route('category.store') }}" method="POST">
                    @csrf

                    <div class="flex flex-col w-full">
                        <label for="category_name"
                            class="block mb-2 text-sm font-medium text-gray-900">Nama
                            Kategori</label>
                        <div class="flex gap-4">


                            <input type="text" name="name" id="category_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="Masukkan Nama Kategori"
                                required value="{{ old('name') }}"
                                >
                                <button type="submit"
                                    class="md:w-full w-16 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 flex items-center justify-center">Tambah
                                </button>
                                <button type="submit"
                                    class="md:w-full w-16 text-white bg-yellow-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 flex items-center justify-center">Cari
                                </button>
                        </div>

                    </div>

                </form>
            </div>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr class="bg-white border-b">
                            <th class="px-6 py-4"
                            scope="row">
                                {{ $loop->iteration }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $category->name }}
                            </td>
                            <td class="px-6 py-4 flex gap-2">


                                <button data-modal-target="modal{{ $category->id }}"
                                    data-modal-toggle="modal{{ $category->id }}"
                                    class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    type="button">
                                    Ubah
                                </button>


                                <button data-modal-target="popup-modal{{ $category->id }}"
                                    data-modal-toggle="popup-modal{{ $category->id }}"
                                    class="block text-white bg-red-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                    type="button">
                                    Delete
                                </button>


                            </td>
                        </tr>
                        <!-- Main  -->
                        <div id="modal{{ $category->id }}" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow">
                                    <!-- Modal header -->
                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                                        <h3 class="text-xl font-semibold text-gray-900">
                                            Ubah data tabel {{ $category->id }}
                                        </h3>
                                        <button type="button"
                                            class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                            data-modal-hide="modal{{ $category->id }}">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="p-4 md:p-5">

                                        <form class="grid gap-4 sm:grid-cols-2 sm:gap-6" enctype="multipart/form-data"
                                            action="{{ route('category.update', $category->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')

                                            <div class="w-full">
                                                <label for="category_name"
                                                    class="block mb-2 text-sm font-medium text-gray-900">Nama
                                                    category</label>
                                                <input type="text" name="name" id="category_name"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                                    placeholder="Masukkan Nama category" required
                                                    value="{{ old('name', $category->name) }}">
                                            </div>

                                            <button type="submit"
                                                class="sm:col-span-2 w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Ubah
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="popup-modal{{ $category->id }}" tabindex="-1"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <div class="relative bg-white rounded-lg shadow">
                                    <button type="button"
                                        class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                        data-modal-hide="popup-modal{{ $category->id }}">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="p-4 md:p-5 text-center">
                                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-1" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are
                                            you sure you want to delete this product?</h3>
                                        <form action="{{ route('category.destroy', $category->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')

                                            <button data-modal-hide="popup-modal{{ $category->id }}" type="submit"
                                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                Yes, I'm sure
                                            </button>
                                        </form>
                                        <button data-modal-hide="popup-modal{{ $category->id }}" type="button"
                                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">No,
                                            cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
