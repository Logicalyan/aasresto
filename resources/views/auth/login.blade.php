@extends('auth.layout')
@section('title', 'Masuk - App Resto')

@section('header', 'Masuk')

@section('content')

    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
        <h1 class="text-xl text-blue-500 font-bold leading-tight tracking-tight md:text-2xl">
            Masuk ke akun kamu
        </h1>
        
        @if (session()->has('status'))
        <div class="class= flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50"
            role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <div>
                <span class="font-medium">Success!</span>
                {{ session()->get('status') }}
            </div>
        </div>
    @endif

        <form class="space-y-4 md:space-y-6" action="{{ route('post.login') }}" method="POST">
            @csrf

            {{-- Email Field --}}
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-blue-500 ">Email</label>

                <input type="email" name="email" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                    placeholder="name@company.com" required="">

            </div>
            @error('email')
                <small>{{ $message }}</small>
            @enderror

            {{-- Passowrd Field --}}
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-blue-500 ">Password</label>

                <input type="password" name="password" id="password" placeholder="••••••••"
                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 "
                    required="">

            </div>
            @error('password')
                <small>{{ $message }}</small>
            @enderror

            <div class="flex items-center justify-between">
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="remember" aria-describedby="remember" type="checkbox"
                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300"
                            required="">
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="remember" class="text-blue-500">Ingat Saya</label>
                    </div>
                </div>


                <a href="{{ route('password.request') }}" class="text-sm font-medium text-blue-600 hover:underline">Lupa
                    password?</a>
            </div>
            <button type="submit"
                class="w-full text-white bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center shadow-lg shadow-blue-500/50">Masuk</button>

            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                Belum memiliki akun? <a href="{{ route('register') }}"
                    class="font-medium text-blue-600 hover:underline">Daftar</a>
            </p>
        </form>
    </div>


    {{-- SweetAlert2 --}}



@endsection
