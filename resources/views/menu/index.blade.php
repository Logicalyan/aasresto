@extends('layouts.app')

@section('content')

    @include('components.navbar')
    @include('components.sidebar')

    <main class="p-4 md:ml-64 h-auto pt-20">

        {{-- Add Button --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
            <button data-modal-target="modal" data-modal-toggle="modal"
                class="block text-white bg-green-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                type="button">
                Tambah
            </button>
            <div id="modal" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                            <h3 class="text-xl font-semibold text-gray-900">
                                Tambah Data Menu
                            </h3>
                            <button type="button"
                                class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                data-modal-hide="modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5">

                            <form class="grid gap-4 sm:grid-cols-2 sm:gap-6" enctype="multipart/form-data"
                                action="{{ route('menu.store') }}" method="POST">
                                @csrf

                                <div class="w-full">
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama
                                        Menu</label>
                                    <input type="text" name="name" id="name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Masukkan Nama Menu" value="{{ old('name') }}">
                                </div>
                                <div class="w-full">
                                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Harga</label>
                                    <input type="number" name="price" id="price" placeholder="Masukkan Harga"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        value="{{ old('price') }}">
                                </div>
                                <div class="w-full">
                                    <label for="stock" class="block mb-2 text-sm font-medium text-gray-900">Stock</label>
                                    <input type="number" name="stock" id="stock" placeholder="Masukkan Harga"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        value="{{ old('stock') }}">
                                </div>
                                <div class="w-full">
                                    <label for="name"
                                        class="block mb-2 text-sm font-medium text-gray-900">Pilih
                                        Kategori</label>
                                    <select id="name" name="category_id"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                        {{-- <option selected></option> --}}
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="desc"
                                        class="block mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
                                    <input id="desc" type="text" name="desc"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500"
                                        placeholder="Your description here @error('desc') is-invalid @enderror"
                                        value="{{ old('desc') }}">
                                    @error('desc')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="flex items-center justify-center w-full sm:col-span-2">
                                    <label for="image"
                                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                            <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                            </svg>
                                            <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to
                                                    upload</span> or drag
                                                and drop</p>
                                            <p class="text-xs text-gray-500">SVG, PNG, JPG, JPEG or GIF
                                                (MAX. 800x400px)
                                            </p>
                                        </div>
                                        <input id="image" name="image" type="file"
                                            class="@error('image') is-invalid @enderror" value="{{ old('image') }}" />

                                        @error('image')
                                            <p>{{ $message }}</p>
                                        @enderror
                                    </label>
                                </div>

                                <button type="submit"
                                    class="sm:col-span-2 w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Tambah
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            {{-- Table --}}
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Gambar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            stock
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kategori
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Deskripsi 
                        </th>
                        <th scope="col" class="px-6 py-3 flex justify-center items-center">
                            Aksi
                        </th>
                    </tr>
                </thead>

                {{-- Facing data --}}
                <tbody>
                    @foreach ($menus as $menu)
                        <tr class="bg-white border-b">
                            <th class="px-6 py-4" scope="row">
                                {{ $loop->iteration }}
                            </th>
                            <td class="px-6 py-4">
                                <img src="{{ asset('/storage/menus/' . $menu->image) }}" alt="" class="w-16">
                            </td>
                            <td class="px-6 py-4">
                                {{ $menu->name }}
                            </td>
                            <td class="px-6 py-4">
                                Rp {{ number_format($menu->price) }}
                            </td>
                            <td class="px-6 py-4">
                                {{ number_format($menu->stock) }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $menu->category->name }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $menu->desc }}
                            </td>
                            <td class="px-6 py-10 flex justify-center items-center gap-1">

                                {{-- button edit --}}
                                <button data-modal-target="modal{{ $menu->id }}"
                                    data-modal-toggle="modal{{ $menu->id }}"
                                    class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    type="button">
                                    Ubah
                                </button>

                                {{-- edit modal --}}
                                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">

                                    <div id="modal{{ $menu->id }}" tabindex="-1" aria-hidden="true"
                                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative p-4 w-full max-w-md max-h-full">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                                                    <h3 class="text-xl font-semibold text-gray-900">
                                                        Ubah data tabel {{ $menu->id }}
                                                    </h3>
                                                    <button type="button"
                                                        class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                                        data-modal-hide="modal{{ $menu->id }}">
                                                        <svg class="w-3 h-3" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 14 14">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="p-4 md:p-5">

                                                    <form class="grid gap-4 sm:grid-cols-2 sm:gap-6"
                                                        enctype="multipart/form-data"
                                                        action="{{ route('menu.update', $menu->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')

                                                        <div class="w-full">
                                                            <label for="name"
                                                                class="block mb-2 text-sm font-medium text-gray-900">Nama
                                                                Menu</label>
                                                            <input type="text" name="name" id="name"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                                                placeholder="Masukkan Nama Menu"
                                                                value="{{ old('name', $menu->name) }}">
                                                        </div>
                                                        <div class="w-full">
                                                            <label for="price"
                                                                class="block mb-2 text-sm font-medium text-gray-900">Harga</label>
                                                            <input type="number" name="price" id="price"
                                                                placeholder="Masukkan Harga"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                                                value="{{ old('price', $menu->price) }}" />
                                                        </div>
                                                        <div class="w-full">
                                                            <label for="stock"
                                                                class="block mb-2 text-sm font-medium text-gray-900">Stock</label>
                                                            <input type="number" name="stock" id="stock"
                                                                placeholder="Masukkan Harga"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                                                value="{{ old('stock', $menu->stock) }}" />
                                                        </div>
                                                        <div class="w-full">
                                                            <label for="name"
                                                                class="block mb-2 text-sm font-medium text-gray-900">Kategori</label>
                                                            <select id="name" name="category_id"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                                @foreach ($categories as $category)
                                                                    <option value="{{ old('category_id', $category->id) }}">
                                                                        {{ old('category_id', $category->name) }}</option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                        <div class="sm:col-span-2">
                                                            <label for="desc"
                                                                class="block mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
                                                            <input id="desc" type="text" name="desc"
                                                                rows="8"
                                                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500"
                                                                placeholder="Your description here @error('desc') is-invali @enderror"
                                                                value="{{ old('desc', $menu->desc) }}">
                                                            @error('desc')
                                                                <p>{{ $message }}</p>
                                                            @enderror
                                                        </div>

                                                        <div class="flex items-center justify-center w-full sm:col-span-2">
                                                            <label for="image"
                                                                class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                                                                <div
                                                                    class="flex flex-col items-center justify-center pt-5 pb-6">
                                                                    <svg class="w-8 h-8 mb-4 text-gray-500"
                                                                        aria-hidden="true"
                                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                        viewBox="0 0 20 16">
                                                                        <path stroke="currentColor" stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                                                    </svg>
                                                                    <p class="mb-2 text-sm text-gray-500"><span
                                                                            class="font-semibold">Click to upload</span> or
                                                                        drag
                                                                        and drop</p>
                                                                    <p class="text-xs text-gray-500">SVG, PNG, JPG, JPEG or
                                                                        GIF
                                                                        (MAX. 800x400px)
                                                                    </p>
                                                                </div>
                                                                <input id="image" name="image" type="file"
                                                                    class="@error('image') is-invalid @enderror"
                                                                    value="{{ old('image', $menu->image) }}" />

                                                                @error('image')
                                                                    <p>{{ $message }}</p>
                                                                @enderror
                                                            </label>
                                                        </div>

                                                        <button type="submit"
                                                            class="sm:col-span-2 w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Ubah
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                {{-- delete button --}}
                                <button data-modal-target="popup-modal{{ $menu->id }}"
                                    data-modal-toggle="popup-modal{{ $menu->id }}"
                                    class="block text-white bg-red-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                    type="button">
                                    Hapus
                                </button>

                            </td>
                        </tr>

                        {{-- delete modal --}}
                        <div id="popup-modal{{ $menu->id }}" tabindex="-1"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <div class="relative bg-white rounded-lg shadow">
                                    <button type="button"
                                        class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                        data-modal-hide="popup-modal{{ $menu->id }}">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="p-4 md:p-5 text-center">
                                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-1" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                            Apa kamu yakin ingin menghapus {{ $menu->name }} dari daftar menu?</h3>
                                        <form action="{{ route('menu.destroy', $menu->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')

                                            <button data-modal-hide="popup-modal{{ $menu->id }}" type="submit"
                                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                Ya, Hapus
                                            </button>
                                        </form>
                                        <button data-modal-hide="popup-modal{{ $menu->id }}" type="button"
                                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Batal</button>
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
