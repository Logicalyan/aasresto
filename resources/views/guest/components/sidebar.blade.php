<input type="checkbox" id="toggle-sidebar" class="hidden peer">

<aside
    class="fixed top-0 left-0 z-40 w-64 h-full pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 bg-red-500 peer-checked:w-16 w-64 bg-gray-800 text-white flex flex-col peer-checked:transition-all peer-checked:duration-700 peer-checked:ease-in-out transition-all duration-700 ease-in-out md:peer-checked:hover:w-64 md:peer-checked:hover:transition-all md:peer-checked:hover:duration-700 md:peer-checked:hover:ease-in-out md:hover:cursor-pointer"
    aria-label="Sidenav" id="drawer-navigation">

    <div class="overflow-y-auto overflow-x-hidden py-5 px-3 h-full relative">

        <form action="#" method="GET" class="md:hidden mb-2">
            <label for="sidebar-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z">
                        </path>
                    </svg>
                </div>
                <input type="text" name="search" id="sidebar-search"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2"
                    placeholder="Search" />
            </div>
        </form>

        <ul class="space-y-2 transition-all ease-in-out duration-700">
            <li>
                @guest()
                <a href="{{ url('/') }}" class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg hover:bg-blue-500 hover:text-white group">

                    <svg class="flex-shrink-0 w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z" clip-rule="evenodd"/>
                    </svg>

                    <span class=" flex-1 ml-8">Beranda</span>
                </a>
            </li>
            @endguest
            <li>
                <a href=""
                    class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg hover:bg-blue-500 group">

                    <svg aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="flex-1 ml-8 whitespace-nowrap group-hover:text-white">Daftar Pesanan</span>
                    <span
                        class="inline-flex justify-center items-center w-5 h-5 text-xs font-semibold rounded-full text-primary-800 bg-primary-100 group-hover:text-white">
                        4
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ route('home') }}"
                    class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg hover:bg-blue-500 group">

                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 group-hover:text-white transition duration-75"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z">
                        </path>
                        <path
                            d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z">
                        </path>
                    </svg>
                    <span class="flex-1 ml-8 whitespace-nowrap group-hover:text-white">Keranjang</span>
                    <span
                        class="inline-flex justify-center items-center w-5 h-5 text-xs font-semibold rounded-full text-primary-800 bg-primary-100 group-hover:text-white">

                    </span>
                </a>
            </li>
        </ul>


    {{-- Aside Bottom Content --}}
    <ul class="absolute w-full py-5 px-3 left-0 bottom-0 z-20">

        @auth

        <a href="{{ route('logout') }}" class="button flex gap-2 text-blue-600 font-medium">
            <img class="rotate-180" src="{{ asset('assets/login.svg') }}" alt="" class="w-4">
            Keluar Akun
        </a>

        @else
            {{-- <a href="" class="button flex gap-2 text-blue-600 font-medium">
                <img class="rotate-180" src="{{ asset('assets/login.svg') }}" alt="" class="w-4">
                Masuk
            </a> --}}

            <li>
                <a href="{{ route('login') }}"
                    class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg hover:bg-gray-100 group">
                    <img src="{{ asset('assets/login.svg') }}" alt="" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75">
                    <span class="flex-1 ml-8 whitespace-nowrap">Masuk</span>
                </a>
            </li>

        @endauth
    </ul>
</aside>
