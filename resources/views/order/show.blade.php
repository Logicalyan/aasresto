@extends('layouts.app')
@section('title', 'Detail Pesanan')
@section('content')
    <section class="bg-white py-8 antialiased md:py-16">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <a href="{{ route('order.index') }}" class="p-2 bg-blue-500 text-white rounded-lg">
                Kembali
            </a>
            <h2 class="text-xl mt-4 font-semibold text-gray-900 sm:text-2xl">Detail ID Pesanan
                #AFNMNAW{{ $order->id }}</h2>

            <div class="mt-6 sm:mt-8 lg:flex lg:gap-8">
                <div
                    class="w-full divide-y divide-gray-200 overflow-hidden rounded-lg border border-gray-200 lg:max-w-xl xl:max-w-2xl">
                    @foreach ($order->orderItems as $orderItem)
                        <div class="space-y-4 p-6">
                            <div class="flex items-center gap-6">
                                <a href="#" class="h-14 w-14 shrink-0">
                                    <img class="h-full w-full hidden rounded-lg"
                                        src="{{ asset('/storage/menus/' . $orderItem->menu->image) }}"
                                        alt="image" />
                                    <img class="h-full w-full block rounded-lg shadow-lg"
                                        src="{{ asset('/storage/menus/' . $orderItem->menu->image) }}"
                                        alt="image" />
                                </a>

                                <div class="flex flex-col">

                                    <a href="#"
                                        class="min-w-0 flex-1 font-medium text-gray-900 hover:underline"> {{ $orderItem->menu->name }}
                                    </a>
                                    <a href="#"
                                        class="min-w-0 flex-1 font-medium text-gray-900"> Rp {{ number_format($orderItem->price) }}
                                    </a>
                                </div>
                            </div>

                            <div class="flex items-center justify-between gap-4">
                                <p class="text-sm font-normal text-gray-500"><span
                                        class="font-medium text-gray-900">Item ID:</span> ABC00{{ $orderItem->id }}</p>

                                <div class="flex items-center justify-end gap-4">
                                    <p class="text-base font-normal text-gray-900">
                                        x{{ $orderItem->quantity }}</p>

                                    <p class="text-xl font-bold leading-tight text-gray-900">Rp
                                        {{ number_format($orderItem->subtotal) }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="space-y-4 bg-gray-50 p-6">
                        <div class="space-y-2">
                            <dl class="flex items-center justify-between gap-4">
                                <dt class="font-normal text-gray-500">Total Harga</dt>
                                <dd class="font-medium text-gray-900">Rp {{ number_format($orderItem->order->total_price) }}</dd>
                            </dl>
                            <dl class="flex items-center justify-between gap-4">
                                <dt class="font-normal text-gray-500">Dibayarkan</dt>
                                <dd class="font-medium text-gray-900">Rp {{ number_format($orderItem->order->paid_amount) }}</dd>
                            </dl>

                            <dl class="flex items-center justify-between gap-4">
                                <dt class="font-normal text-gray-500">Hitung kembalian</dt>
                                <dd class="text-base font-medium">Rp {{ number_format($orderItem->order->paid_amount) }} - Rp {{ number_format($orderItem->order->total_price) }}</dd>
                            </dl>

                            {{-- <dl class="flex items-center justify-between gap-4">
                                <dt class="font-normal text-gray-500">Store Pickup</dt>
                                <dd class="font-medium text-gray-900">$99</dd>
                            </dl> --}}

                            {{-- <dl class="flex items-center justify-between gap-4">
                                <dt class="font-normal text-gray-500">Tax</dt>
                                <dd class="font-medium text-gray-900">$799</dd>
                            </dl> --}}
                        </div>

                        <dl
                            class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2">
                            <dt class="text-lg font-bold text-gray-900">Kembalian</dt>
                            <dd class="text-lg font-bold text-gray-900">Rp {{ number_format($order->change_amount) }}</dd>
                        </dl>
                    </div>
                </div>

                <div class="mt-6 grow sm:mt-8 lg:mt-0">
                    <div
                        class="space-y-6 rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
                        <h3 class="text-xl font-semibold text-gray-900">Detail Pemesanan</h3>

                        <ol class="relative ms-3 border-s border-gray-200">
                            <li class="mb-10 ms-6">
                                <span
                                    class="bg-white absolute -start-3 flex h-6 w-6 items-center justify-center rounded-full ring-2 ring-blue-500">
                                    <svg class="w-4 h-4 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                    </svg>

                                </span>
                                <h4 class="mb-0.5 text-base font-semibold text-gray-900">Tanggal Pemesanan</h4>
                                <p class="text-sm font-normal text-gray-500">{{ $order->created_at }}</p>
                            </li>

                            <li class="mb-10 ms-6">
                                <span
                                class="bg-white absolute -start-3 flex h-6 w-6 items-center justify-center rounded-full ring-2 ring-blue-500">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-width="2" d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                </svg>

                            </span>
                                <h4 class="mb-0.5 text-base font-semibold text-gray-900">Nama Pembeli</h4>
                                <p class="text-sm font-normal text-gray-500">{{ $order->customer_name }}
                                </p>
                            </li>

                            <li class="mb-10 ms-6 text-primary-700 dark:text-primary-500">
                                <span
                                    class="bg-white absolute -start-3 flex h-6 w-6 items-center justify-center rounded-full ring-2 ring-blue-500">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M2 6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6Zm2 8v-2h7v2H4Zm0 2v2h7v-2H4Zm9 2h7v-2h-7v2Zm7-4v-2h-7v2h7Z" clip-rule="evenodd"/>
                                    </svg>

                                </span>
                                <h4 class="mb-0.5 font-semibold">Meja</h4>
                                <p class="text-sm">{{ $order->table->name }}</p>
                            </li>

                            <li class="mb-10 ms-6 text-primary-700 dark:text-primary-500">
                                <span
                                    class="bg-white absolute -start-3 flex h-6 w-6 items-center justify-center rounded-full ring-2 ring-blue-500">
                                    <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                                    </svg>
                                </span>
                                <h4 class="mb-0.5 text-base font-semibold">Status</h4>
                                <p class="text-sm">Sukses</p>
                            </li>

                            <li class="mb-10 ms-6 text-primary-700 dark:text-primary-500">
                                <span
                                    class="bg-white absolute -start-3 flex h-6 w-6 items-center justify-center rounded-full ring-2 ring-blue-500">
                                    <svg class="w-3 h-3" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                                        <g id="Layer_1_1_">
                                            <rect x="8.793" y="14" width="22" height="2"></rect>
                                            <rect x="8.793" y="20" width="22" height="2"></rect>
                                            <rect x="8.793" y="26" width="17" height="2"></rect>
                                            <rect x="8.793" y="32" width="12" height="2"></rect>
                                            <rect x="8.793" y="38" width="12" height="2"></rect>
                                            <path d="M38.793,18.586v-10L31.207,1H0.793v48h38V31.414L49.207,21l-6.414-6.414L38.793,18.586z M37.793,22.414L41.379,26l-12,12
                                                h-3.586v-3.586L37.793,22.414z M31.793,4.414L35.379,8h-3.586V4.414z M36.793,47h-34V3h27v7h7v10.586l-13,13V40h6.414l6.586-6.586
                                                V47z M42.793,24.586L39.207,21l3.586-3.586L46.379,21L42.793,24.586z"></path>
                                        </g>
                                        </svg>
                                </span>
                                <h4 class="mb-0.5 text-base font-semibold">Ulasan</h4>
                                <p class="text-sm">{{ $order->review }}</p>
                            </li>

                        </ol>

                        {{-- <div class="gap-4 sm:flex sm:items-center">
                            <button type="button"
                                class="w-full rounded-lg  border border-gray-200 bg-white px-5  py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">Cancel
                                the order</button>

                            <a href="#"
                                class="mt-4 flex w-full items-center justify-center rounded-lg bg-primary-700  px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300  dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 sm:mt-0">Order
                                details</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
