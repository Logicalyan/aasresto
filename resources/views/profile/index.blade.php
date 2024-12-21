@extends('layouts.app')
@section('title', 'Profile')
@section('content')


@include('profile.shared.sidebar')
@include('profile.shared.navbar')

<main class="p-4 md:ml-64 peer-checked:ml-16 h-auto pt-20">
        <a href="{{ route('home') }}" type="button" class="flex gap-2 items-center md:w-2/3 lg:w-1/3 font-medium rounded-lg p-2 text-white bg-blue-500">
            <div class="bg-white p-1 rounded-lg">
                <svg class="w-6 h-6 text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
                </svg>
            </div>

            <p>
                Kembali ke Beranda
            </p>
        </a>

</main>

@endsection
