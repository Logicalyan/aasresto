@extends('auth.layout')
@section('title', 'Daftar Akun - AppResto')
@section('header', 'Daftar')

@section('content')

                {{-- Form  --}}
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">

                    {{-- Header Form --}}
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-blue-500 md:text-2xl">
                        Buat akun
                    </h1>

                    {{-- Form --}}
                    <form class="space-y-2 md:space-y-4" action="{{ route('post.register') }}" method="POST">
                        @csrf
                        {{-- Name Container --}}
                        {{-- <p class="font-medium">Nama</p> --}}
                        <div class="relative">
                            <input type="text" name="name" id="name" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 border bg-white rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('name')
                            is-invalid @enderror "placeholder="Nama" value="{{ old('name') }}">

                            <label for="name" class="absolute text-sm text-gray-500 font-medium duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Masukkan Nama</label>
                        </div>

                        @error('name')
                        <div class="flex items-center p-2 border border-red-300 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                            </svg>
                            <div>
                                <span class="font-medium">Warning! </span> {{ $message }}
                            </div>
                        </div>
                        @enderror
                        {{-- End Email Container --}}

                        <div class="relative">
                            <input type="text" name="email" id="email" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 border bg-white rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('email')
                            is-invalid @enderror "placeholder="mail@email.com" value="{{ old('email') }}">

                            <label for="email" class="absolute text-sm text-gray-500 font-medium duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Masukkan Email</label>



                        </div>

                        @error('email')
                        <div class="flex items-center p-2 border border-red-300 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                            </svg>
                            <div>
                                <span class="font-medium">Warning! </span> {{ $message }}
                            </div>
                        </div>
                        @enderror
                        {{-- End Email Container --}}


                        <div class="relative">

                            <input type="password" name="password" id="password" placeholder="••••••" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 border bg-white rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('email')
                            is-invalid @enderror">

                            <label for="password" class="absolute text-sm text-gray-500 font-medium duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Password</label>
                        </div>

                        @error('password')
                    <div class="flex items-center p-2 border border-red-300 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <div>
                            <span class="font-medium">Warning! </span> {{ $message }}
                        </div>

                    </div>
                    @enderror

                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                              <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300" required="">
                            </div>
                            <div class="ml-3 text-sm">
                              <label for="terms" class="font-light text-blue-500">Saya setuju dengan <a class="font-medium text-blue-600 hover:underline" href="#">Syarat & Ketentuan</a></label>
                            </div>
                        </div>
                        <button type="submit" class="w-full text-blue-500 ring-2 bg-white hover:bg-blue-500 hover:text-white focus:ring-0 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Daftar</button>
                        <p class="text-sm font-light text-gray-500">
                            Sudah memiliki akun? <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:underline ">Masuk disini</a>
                        </p>
                    </form>
                </div>
@endsection
