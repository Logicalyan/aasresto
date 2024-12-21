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
                                Tambah Data Pengguna
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
                                action="{{ route('user.store') }}" method="POST">
                                @csrf

                                <div class="w-full">
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                                    <input type="text" name="name" id="name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Masukkan Nama" value="{{ old('name') }}">
                                </div>
                                <div class="w-full">
                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                                    <input type="email" name="email" id="email" placeholder="Masukkan Email"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        value="{{ old('email') }}">
                                </div>
                                <div class="w-full">
                                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">password</label>
                                    <input type="password" name="password" id="password" placeholder="Masukkan Password"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        value="{{ old('password') }}">
                                </div>
                                <div class="w-full">
                                    <label for="name"
                                        class="block mb-2 text-sm font-medium text-gray-900">Pilih
                                        Role</label>
                                    <select id="role" name="role"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">

                                            <option value="staff">Staff</option>

                                            <option value="admin">Admin</option>

                                    </select>
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
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        {{-- <th scope="col" class="px-6 py-3">
                            Password
                        </th> --}}
                        <th scope="col" class="px-6 py-3">
                            Role
                        </th>
                        {{-- <th scope="col" class="px-6 py-3">
                            Kategori
                        </th> --}}
                        {{-- <th scope="col" class="px-6 py-3">
                            Deskripsi
                        </th> --}}
                        <th scope="col" class="px-6 py-3 flex justify-center items-center">
                            Aksi
                        </th>
                    </tr>
                </thead>

                {{-- Facing data --}}
                <tbody>
                    @foreach ($users as $user)
                        <tr class="bg-white border-b">
                            <th class="px-6 py-4" scope="row">
                                {{ $loop->iteration }}
                            </th>
                            {{-- <td class="px-6 py-4">
                                <img src="{{ asset('/storage/menus/' . $menu->image) }}" alt="" class="w-16">
                            </td> --}}
                            <td class="px-6 py-4">
                                {{ $user->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $user->email }}
                            </td>
                            {{-- <td class="px-6 py-4">
                                {{ $user->stock }}
                            </td> --}}

                            <td class="px-6 py-4">
                                {{ $user->role }}
                            </td>
                            {{-- <td class="px-6 py-4">
                                {{ $user->desc }}
                            </td> --}}

                            <td class="px-6 py-10 flex justify-center items-center gap-1">

                                {{-- button edit --}}
                                <button data-modal-target="modal{{ $user->id }}"
                                    data-modal-toggle="modal{{ $user->id }}"
                                    class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    type="button">
                                    Ubah
                                </button>

                                {{-- edit modal --}}
                                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">

                                    <div id="modal{{ $user->id }}" tabindex="-1" aria-hidden="true"
                                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative p-4 w-full max-w-md max-h-full">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                                                    <h3 class="text-xl font-semibold text-gray-900">
                                                        Ubah data tabel {{ $user->id }}
                                                    </h3>
                                                    <button type="button"
                                                        class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                                        data-modal-hide="modal{{ $user->id }}">
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
                                                        action="{{ route('user.update', $user->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')

                                                        <div class="w-full">
                                                            <label for="name"
                                                                class="block mb-2 text-sm font-medium text-gray-900">Nama
                                                                user</label>
                                                            <input type="text" name="name" id="name"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                                                placeholder="Masukkan Nama user"
                                                                value="{{ old('name', $user->name) }}">
                                                        </div>
                                                        <div class="w-full">
                                                            <label for="email"
                                                                class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                                                            <input type="email" name="email" id="email"
                                                                placeholder="Masukkan Harga"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                                                value="{{ old('email', $user->email) }}" />
                                                        </div>

                                                        <div class="w-full">
                                                            <label for="role"
                                                                class="block mb-2 text-sm font-medium text-gray-900">Pilih Role</label>
                                                            <select id="role" name="role"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                                    <option disabled value="@selected('$user->id')">{{ $user->role }}</option>
                                                                    <option value="staff">Staff</option>
                                                                    <option value="admin">Admin</option>

                                                            </select>
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
                                <button data-modal-target="popup-modal{{ $user->id }}"
                                    data-modal-toggle="popup-modal{{ $user->id }}"
                                    class="block text-white bg-red-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                    type="button">
                                    Hapus
                                </button>

                            </td>
                        </tr>

                        {{-- delete modal --}}
                        <div id="popup-modal{{ $user->id }}" tabindex="-1"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <div class="relative bg-white rounded-lg shadow">
                                    <button type="button"
                                        class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                        data-modal-hide="popup-modal{{ $user->id }}">
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
                                            Apa kamu yakin ingin menghapus {{ $user->name }} dari daftar menu?</h3>
                                        <form action="{{ route('user.destroy', $user->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')

                                            <button data-modal-hide="popup-modal{{ $user->id }}" type="submit"
                                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                Ya, Hapus
                                            </button>
                                        </form>
                                        <button data-modal-hide="popup-modal{{ $user->id }}" type="button"
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
