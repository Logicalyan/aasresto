@extends('layouts.app')
@section('title', 'Cart')


@section('content')
    @include('components.navbar')
    @include('components.sidebar')


    <!-- resources/views/cart/index.blade.php -->

    <section class="bg-white py-8 antialiased peer-checked:md:ml-16 md:ml-64 md:py-16">
        @if (Session::get('success'))
            <script>
                const Toast = Swal.mixin({
                    toast: true,
                    position: "top",
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    }
                });
                Toast.fire({
                    icon: "success",
                    title: "{{ Session::get('success') }}"
                });
            </script>
        @endif

        <div class="mx-auto max-w-screen-xl px-2 2xl:px-0">
            <h2 class="text-xl font-semibold text-gray-900 sm:text-2xl">Keranjang</h2>
            <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">
                <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">
                    @foreach ($items as $cartItem)
                        <div class="space-y-6">
                            <div class="rounded-lg border border-gray-200 bg-white p-4 mb-4 shadow-sm md:p-6">
                                <div class="space-y-6 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
                                    <a href="#" class="w-20 shrink-0 md:order-1">
                                        <img class="h-20 w-20 dark:hidden"
                                            src="{{ asset('/storage/menus/' . $cartItem->menu->image) }}" alt="" />
                                        <img class="hidden h-20 w-20 dark:block"
                                            src="{{ asset('/storage/menus/' . $cartItem->menu->image) }}" alt="" />
                                    </a>

                                    <label for="counter-input" class="sr-only">Choose quantity:</label>
                                    <div class="flex items-center justify-between md:order-3 md:justify-end">
                                        <div class="flex items-center">

                                            <div name="" class="text-md">
                                                Kuantitas: {{ $cartItem->quantity }}
                                            </div>
                                        </div>
                                        <div class="text-end md:order-4 md:w-32">
                                            <p class="text-base font-bold text-gray-900">
                                                Rp{{ number_format($cartItem->subtotal) }}</p>
                                        </div>
                                    </div>

                                    <div class="w-full min-w-0 flex-1 space-y-4 md:order-2 md:max-w-md">
                                        <div class="flex flex-col">

                                            <a href="#" class="text-base font-medium text-gray-900 hover:underline">
                                                {{ $cartItem->menu->name }}
                                            </a>
                                            <p href="#"
                                                class="text-base  text-sm font-small  text-gray-600 hover:underline">
                                                Rp {{ number_format($cartItem->menu->price) }}
                                            </p>
                                        </div>

                                        <div class="flex items-center gap-4">

                                            <form action="{{ route('cart-item.destroy', $cartItem->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"
                                                    class="inline-flex items-center text-sm font-medium text-red-600 hover:underline dark:text-red-500">
                                                    <svg class="me-1.5 h-5 w-5" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="M6 18 17.94 6M18 18 6.06 6" />
                                                    </svg>
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>

                <div class="mx-auto mt-6 max-w-4xl flex-1 space-y-6 lg:mt-0 lg:w-full">
                    <div class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm sm:p-6">
                        <p class="text-xl font-semibold text-gray-900">Rincian Keranjang</p>

                        <div class="space-y-4">
                            @foreach ($items as $price)
                                <div class="space-y-2">
                                    <dl class="flex items-center justify-between gap-4">
                                        <dt class="text-base font-normal text-gray-500 dark:text-gray-400">
                                            {{ $price->menu->name }}*{{ $price->quantity }}</dt>
                                        <dd class="text-base font-medium text-gray-900">
                                            Rp{{ number_format($price->subtotal) }}</dd>
                                    </dl>
                                </div>
                            @endforeach

                            <dl
                                class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2 dark:border-gray-700">
                                <dt class="text-base font-bold text-gray-900">Total</dt>
                                <dd class="text-base font-bold text-gray-900">Rp {{ number_format($total) }}</dd>
                            </dl>
                        </div>

                        <a href="{{ route('order.create') }}"  class=" flex w-full bg-blue-500 text-white items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-black hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300">
                            Buat Pesanan

                        </a>

                        {{-- <form action="{{ route('addOrder') }}" method="post">
                            @csrf
                            <button type="submit"
                                class=" flex w-full bg-blue-500 text-white items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-black hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300">Buat Pesanan</button>
                        </form> --}}

                        <div class="flex items-center justify-center gap-2">
                            <span class="text-sm font-normal text-gray-500 dark:text-gray-400"> atau </span>
                            <a href="{{ route('home') }}" title=""
                                class="inline-flex items-center gap-2 text-sm font-medium text-primary-700 underline hover:no-underline dark:text-primary-500">
                                Tambah Item
                                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
