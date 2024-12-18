<main class="p-4 md:ml-64 peer-checked:ml-16 h-auto pt-20">

    {{-- Carousel Slider --}}
    <div id="default-carousel" class="relative w-full mb-4" data-carousel="slide">
        <h1 class="mb-4 text-3xl font-bold leading-none tracking-tight text-blue-600 md:text-5xl lg:text-6xl">Menu <mark
                class="px-2 text-white bg-blue-600 rounded">Favorit</mark></h1>
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class="absolute block w-full h-full bg-blue-400 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                </div>
            </div>
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class="absolute block w-full h-full bg-red-400 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                </div>
            </div>
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div
                    class="absolute block w-full h-full bg-green-400 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                </div>
            </div>
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div
                    class="absolute block w-full h-full bg-yellow-400 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                </div>
            </div>
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div
                    class="absolute block w-full h-full bg-blue-400 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                </div>
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    {{-- Search Menu --}}
    <form class="md:w-full mx-auto" method="GET" action="{{ route('home') }}">

        <label for="default-search"
            class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="text" name="search" id="default-search"
                class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                placeholder="Cari Menu, Kategori..." required />
            <button 
                class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Cari</button>
        </div>
    </form>

    {{-- All Food--}}
    <div class="flex flex-col h-auto md:overflow-y-none">

            <div class="title bg-blue-100 p-2 my-2 w-auto text-center">
                <b class="text-blue-500">
                    Semua Kategori
                </b>
            </div>
            <div class="flex gap-2 overflow-x-auto relative scrollbar">
                @foreach ($menus as $item)
                    <div class="h-auto p-2 bg-white border rounded-lg">
                        <figure class="w-64 h-36">
                            <img class="h-full w-full border rounded-lg"
                                src="{{ asset('/storage/menus/' . $item->image) }}" alt="product image" />
                        </figure>

                        <p>{{ $item->name }}</p>
                        <h2 class="text-grey-100 font-medium w-full">Rp {{ number_format($item->price) }}</h2>

                        <form action="{{ route('post.cart', $item->id) }}" method="post">
                            @csrf

                            <div class="flex flex-col gap-2 w-full justify-center items-center">
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="menu_id" value="{{ $item->id }}">

                                <div class="w-full flex items-center justify-between">
                                    <p class="font-light text-gray-400">Sisa stok:
                                        <span
                                            class="bg-green-100 px-2 rounded-lg text-green-500 @if ($item->stock < 10) bg-red-100 text-red-500 @elseif ($item->stock < 20) bg-yellow-100 text-yellow-500 @endif">
                                            {{ $item->stock }}
                                        </span>
                                    </p>

                                    <div class="relative flex items-center w-auto">
                                        <button type="button" id="decrement-button{{ $item->id }}"
                                            data-input-counter-decrement="counter-input{{ $item->id }}"
                                            class="flex-shrink-0 bg-gray-100 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100 focus:ring-2 focus:outline-none">
                                            <svg class="w-2.5 h-2.5 text-gray-900" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                            </svg>
                                        </button>
                                        <input type="text" name="quantity" id="counter-input{{ $item->id }}"
                                            data-input-counter data-input-counter-min="1"
                                            data-input-counter-max="{{ $item->stock }}"
                                            class="flex-shrink-0 text-gray-900 border-0 text-sm font-normal focus:outline-none focus:ring-0 max-w-[3.5rem] text-center"
                                            placeholder="" value="1" required />
                                        <button type="button" id="increment-button{{ $item->id }}"
                                            data-input-counter-increment="counter-input{{ $item->id }}"
                                            class="flex-shrink-0 bg-gray-100 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100 focus:ring-2 focus:outline-none">
                                            <svg class="w-2.5 h-2.5 text-gray-900" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 18 18">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                            </svg>
                                        </button>
                                    </div>



                                </div>
                                <div class="w-full flex items-center gap-2">
                                    <button id="readButton{{ $item->id }}"
                                        data-modal-target="readProductModal{{ $item->id }}"
                                        data-modal-toggle="readProductModal{{ $item->id }}"
                                        class="block border transition-all duration-700 ease-in hover:scale-75 text-blue-500 bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                        type="button">
                                        Detail
                                    </button>

                                    <div id="readProductModal{{ $item->id }}" tabindex="-1" aria-hidden="true"
                                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">

                                        <div class="relative p-4 w-auto max-w-xl h-full md:h-auto">
                                            <!-- Modal content -->
                                            <div class="relative p-4 bg-white rounded-lg shadow sm:p-5">

                                                <div class="flex flex-col">
                                                    <!-- Modal header -->
                                                    <div
                                                        class="flex justify-between items-center mb-4 rounded-t sm:mb-5">
                                                        <p class="font-medium">Detail Menu</p>
                                                        <div>
                                                            <button type="button"
                                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex"
                                                                data-modal-toggle="readProductModal{{ $item->id }}">
                                                                <svg aria-hidden="true" class="w-5 h-5"
                                                                    fill="currentColor" viewBox="0 0 20 20"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd"
                                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg>
                                                                <span class="sr-only">Close modal</span>
                                                            </button>
                                                        </div>

                                                    </div>

                                                    <div class="flex flex-col gap-2">

                                                        <figure class="w-full mb-2 md:w-96 h-64">
                                                            <img class="h-full w-full border rounded-lg"
                                                                src="{{ asset('/storage/menus/' . $item->image) }}"
                                                                alt="product image" />
                                                        </figure>

                                                        <div class="flex flex-col gap-2">
                                                            <div class="flex justify-between">
                                                                <div class="w-1/2">
                                                                    <b>Nama Menu</b>
                                                                    <p>{{ $item->name }}</p>
                                                                </div>
                                                                <div class="w-2/5">
                                                                    <b>Harga</b>
                                                                    <p>Rp {{ number_format($item->price) }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="flex justify-between">
                                                                <div class="w-1/2">
                                                                    <b>Kategori</b>
                                                                    <p>{{ $item->category->name }}</p>
                                                                </div>
                                                                <div class="w-2/5">
                                                                    <b>Stok</b>
                                                                    <p>{{ $item->stock }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="flex justify-between">
                                                                <div class="">
                                                                    <b>Deskripsi</b>
                                                                    <p>{{ $item->desc }}</p>
                                                                </div>
                                                            </div>



                                                        </div>


                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>



                                    <button type="submit"
                                        class="w-full rounded-lg bg-blue-500 text-white p-2 transition-all duration-700 ease-in-out transform hover:scale-75">Pesan</button>
                                </div>

                        </form>
                    </div>
            </div>
        @endforeach
    </div>

    {{-- By Category --}}
    <div class="flex flex-col h-auto md:overflow-y-none">
        @foreach ($categories as $category)
            <div class="title bg-blue-100 p-2 my-2 w-auto text-center">
                <b class="text-blue-500">
                    {{ $category->name }}
                </b>
            </div>
            <div class="flex gap-2 overflow-x-auto relative scrollbar">
                @foreach ($category->menu as $item)
                    <div class="h-auto p-2 bg-white border rounded-lg">
                        <figure class="w-64 h-36">
                            <img class="h-full w-full border rounded-lg"
                                src="{{ asset('/storage/menus/' . $item->image) }}" alt="product image" />
                        </figure>

                        <p>{{ $item->name }}</p>
                        <h2 class="text-grey-100 font-medium w-full">Rp {{ number_format($item->price) }}</h2>

                        <form action="{{ route('post.cart', $item->id) }}" method="post">
                            @csrf

                            <div class="flex flex-col gap-2 w-full justify-center items-center">
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="menu_id" value="{{ $item->id }}">

                                <div class="w-full flex items-center justify-between">
                                    <p class="font-light text-gray-400">Sisa stok:
                                        <span
                                            class="bg-green-100 px-2 rounded-lg text-green-500 @if ($item->stock < 10) bg-red-100 text-red-500 @elseif ($item->stock < 20) bg-yellow-100 text-yellow-500 @endif">
                                            {{ $item->stock }}
                                        </span>
                                    </p>

                                    <div class="relative flex items-center w-auto">
                                        <button type="button" id="decrement-button{{ $item->id }}"
                                            data-input-counter-decrement="counter-input{{ $item->id }}"
                                            class="flex-shrink-0 bg-gray-100 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100 focus:ring-2 focus:outline-none">
                                            <svg class="w-2.5 h-2.5 text-gray-900" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                            </svg>
                                        </button>
                                        <input type="text" name="quantity" id="counter-input{{ $item->id }}"
                                            data-input-counter data-input-counter-min="1"
                                            data-input-counter-max="{{ $item->stock }}"
                                            class="flex-shrink-0 text-gray-900 border-0 text-sm font-normal focus:outline-none focus:ring-0 max-w-[3.5rem] text-center"
                                            placeholder="" value="1" required />
                                        <button type="button" id="increment-button{{ $item->id }}"
                                            data-input-counter-increment="counter-input{{ $item->id }}"
                                            class="flex-shrink-0 bg-gray-100 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100 focus:ring-2 focus:outline-none">
                                            <svg class="w-2.5 h-2.5 text-gray-900" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 18 18">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                            </svg>
                                        </button>
                                    </div>



                                </div>
                                <div class="w-full flex items-center gap-2">
                                    <button id="readButton{{ $item->id }}"
                                        data-modal-target="readProductModal{{ $item->id }}"
                                        data-modal-toggle="readProductModal{{ $item->id }}"
                                        class="block border transition-all duration-700 ease-in hover:scale-75 text-blue-500 bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                        type="button">
                                        Detail
                                    </button>

                                    <div id="readProductModal{{ $item->id }}" tabindex="-1" aria-hidden="true"
                                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">

                                        <div class="relative p-4 w-auto max-w-xl h-full md:h-auto">
                                            <!-- Modal content -->
                                            <div class="relative p-4 bg-white rounded-lg shadow sm:p-5">

                                                <div class="flex flex-col">
                                                    <!-- Modal header -->
                                                    <div
                                                        class="flex justify-between items-center mb-4 rounded-t sm:mb-5">
                                                        <p class="font-medium">Detail Menu</p>
                                                        <div>
                                                            <button type="button"
                                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex"
                                                                data-modal-toggle="readProductModal{{ $item->id }}">
                                                                <svg aria-hidden="true" class="w-5 h-5"
                                                                    fill="currentColor" viewBox="0 0 20 20"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd"
                                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg>
                                                                <span class="sr-only">Close modal</span>
                                                            </button>
                                                        </div>

                                                    </div>

                                                    <div class="flex flex-col gap-2">

                                                        <figure class="w-full mb-2 md:w-96 h-64">
                                                            <img class="h-full w-full border rounded-lg"
                                                                src="{{ asset('/storage/menus/' . $item->image) }}"
                                                                alt="product image" />
                                                        </figure>

                                                        <div class="flex flex-col gap-2">
                                                            <div class="flex justify-between">
                                                                <div class="w-1/2">
                                                                    <b>Nama Menu</b>
                                                                    <p>{{ $item->name }}</p>
                                                                </div>
                                                                <div class="w-2/5">
                                                                    <b>Harga</b>
                                                                    <p>Rp {{ number_format($item->price) }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="flex justify-between">
                                                                <div class="w-1/2">
                                                                    <b>Kategori</b>
                                                                    <p>{{ $category->name }}</p>
                                                                </div>
                                                                <div class="w-2/5">
                                                                    <b>Stok</b>
                                                                    <p>{{ $item->stock }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="flex justify-between">
                                                                <div class="">
                                                                    <b>Deskripsi</b>
                                                                    <p>{{ $item->desc }}</p>
                                                                </div>
                                                            </div>



                                                        </div>


                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>



                                    <button type="submit"
                                        class="w-full rounded-lg bg-blue-500 text-white p-2 transition-all duration-700 ease-in-out transform hover:scale-75">Pesan</button>
                                </div>

                        </form>
                    </div>
            </div>
        @endforeach
    </div>
    @endforeach

    </div>
    </div>

    {{-- <div class="grid grid-cols-2 gap-4 mb-4">
        <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
        <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
        <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
        <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
    </div>
    <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4"></div>
    <div class="grid grid-cols-2 gap-4">
        <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
        <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
        <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
        <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
    </div> --}}
</main>
