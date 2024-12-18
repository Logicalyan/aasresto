<input type="checkbox" id="toggle-sidebar" class="hidden peer">

<aside
    class="fixed top-0 left-0 z-40 w-64 h-full pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 bg-red-500 peer-checked:w-16 w-64 bg-gray-800 text-white flex flex-col peer-checked:transition-all peer-checked:duration-700 peer-checked:ease-in-out transition-all duration-700 ease-in-out md:peer-checked:hover:w-64 md:peer-checked:hover:transition-all md:peer-checked:hover:duration-700 md:peer-checked:hover:ease-in-out md:hover:cursor-pointer"
    aria-label="Sidenav" id="drawer-navigation">

    <div class="overflow-y-auto py-5 px-3 h-full bg-white">
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
                {{-- @if (Auth::user()->role == 'admin') --}}
                <a href="{{ route('home') }}" class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg hover:bg-blue-500 group">

                    <svg class="flex-shrink-0 w-6 h-6 text-gray-600 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z" clip-rule="evenodd"/>
                    </svg>

                    <span class="flex-1 ml-8 group-hover:text-white">Beranda</span>
                </a>
                {{-- @endif --}}
            </li>
            <li>
                <a href="{{ route('cart.index') }}"
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
                <a href="{{ route('cart.index') }}"
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
                    @if (auth()->check())
                    <span
                    class="inline-flex justify-center items-center w-5 h-5 text-xs font-semibold rounded-full text-primary-800 bg-primary-100 group-hover:text-white">
                    {{ $count }}
                </span>
                @endif
                </a>
            </li>
        </ul>

        @if (Auth::user()->role == 'admin')
            <ul class="pt-5 mt-5 space-y-2 border-t border-gray-200">
                <li>
                    <a href="{{ route('admin.home') }}"
                        class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg transition duration-75 hover:bg-blue-500 group">
                        <svg aria-hidden="true" class="w-6 h-6 flex-shrink-0 group-hover:text-white text-gray-500 transition duration-75"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                            <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                        </svg>
                        <span class="flex-1 ml-8 group-hover:text-white">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('menu.index') }}"
                        class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg transition duration-75 hover:bg-blue-500 group">
                        <svg aria-hidden="true" class="w-6 h-6 flex-shrink-0 group-hover:text-white text-gray-500 transition duration-75"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                            <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                        </svg>
                        <span class="flex-1 ml-8 group-hover:text-white">Menu</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('category.index') }}"
                        class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg hover:bg-blue-500 transition duration-75 group">
                        <svg class="flex-shrink-0 w-6 h-6 text-gray-600 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M5.005 10.19a1 1 0 0 1 1 1v.233l5.998 3.464L18 11.423v-.232a1 1 0 1 1 2 0V12a1 1 0 0 1-.5.866l-6.997 4.042a1 1 0 0 1-1 0l-6.998-4.042a1 1 0 0 1-.5-.866v-.81a1 1 0 0 1 1-1ZM5 15.15a1 1 0 0 1 1 1v.232l5.997 3.464 5.998-3.464v-.232a1 1 0 1 1 2 0v.81a1 1 0 0 1-.5.865l-6.998 4.042a1 1 0 0 1-1 0L4.5 17.824a1 1 0 0 1-.5-.866v-.81a1 1 0 0 1 1-1Z" clip-rule="evenodd"/>
                            <path d="M12.503 2.134a1 1 0 0 0-1 0L4.501 6.17A1 1 0 0 0 4.5 7.902l7.002 4.047a1 1 0 0 0 1 0l6.998-4.04a1 1 0 0 0 0-1.732l-6.997-4.042Z"/>
                        </svg>

                        <span class="flex-1 ml-8 group-hover:text-white">Kategori</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('table.index') }}"
                        class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg transition duration-75 hover:bg-blue-500 group">
                        <svg class="flex-shrink-0 w-6 h-6 text-gray-600 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M2 6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6Zm2 8v-2h7v2H4Zm0 2v2h7v-2H4Zm9 2h7v-2h-7v2Zm7-4v-2h-7v2h7Z" clip-rule="evenodd"/>
                        </svg>

                        <span class="flex-1 ml-8 group-hover:text-white">Meja</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.index') }}"
                        class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg transition duration-75 hover:bg-blue-500 group">
                        <svg class="flex-shrink-0 w-6 h-6 text-gray-600 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                        </svg>

                        <span class="flex-1 ml-8 group-hover:text-white">Pengguna</span>
                    </a>
                </li>
            </ul>
        @endif
    </div>

    {{-- Aside Bottom Content --}}
    <div class="absolute bottom-0 left-0 justify-center p-4 space-x-4 w-full lg:flex bg-white z-20">

        @auth
            <a href="{{ route('logout') }}" class="button text-blue-600 font-medium">Keluar akun</a>
        @else
            <a href="{{ route('login') }}" class="button flex gap-2 text-blue-600 font-medium">
                <img class="rotate-180" src="{{ asset('assets/login.svg') }}" alt="" class="w-4">
                Masuk
            </a>

        @endauth
    </div>
</aside>
