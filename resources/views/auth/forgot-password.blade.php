@extends('auth.layout')

@section('title', 'Forgot Password')
@section('header', 'Lupa Password')

@section('content')
    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
        @if ($errors->any())
            <div class="flex items-center p-4 mb-4 text-sm text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50"
                role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <div>
                    @foreach ($errors->all() as $error)
                        <span class="font-medium">Warning</span>
                        {{ $error }}
                    @endforeach
                </div>

            </div>
        @endif

        @if (session()->has('status'))
            <div class="class= flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50"
                role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <div>
                    <span class="font-medium">Success! </span>
                    {{ session()->get('status') }}
                </div>
            </div>
        @endif

        <h1 class="text-xl text-blue-500 font-bold leading-tight tracking-tight md:text-2xl">
            Masukkan Email
        </h1>
        <form class="space-y-4 md:space-y-6" action="{{ route('password.email') }}" method="POST">
            @csrf

            {{-- Email Field --}}
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-blue-500 ">Email</label>

                <input type="email" name="email" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                    placeholder="name@company.com" required="">
            </div>


            <button type="submit"
                class="w-full text-white bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center shadow-lg shadow-blue-500/50">Kirim</button>

        </form>
    </div>

@endsection
