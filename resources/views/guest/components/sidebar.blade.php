<input type="checkbox" id="toggle-sidebar" class="hidden peer">

<aside
    class="fixed top-0 left-0 z-40 w-64 h-full pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 bg-red-500 peer-checked:w-16 w-64 bg-gray-800 text-white flex flex-col peer-checked:transition-all peer-checked:duration-700 peer-checked:ease-in-out transition-all duration-700 ease-in-out md:peer-checked:hover:w-64 md:peer-checked:hover:transition-all md:peer-checked:hover:duration-700 md:peer-checked:hover:ease-in-out md:hover:cursor-pointer"
    aria-label="Sidenav" id="drawer-navigation">

    <div class="overflow-y-auto overflow-x-hidden py-5 px-3 h-full relative">

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
                <a href="{{ route('home') }}"
                    class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg hover:bg-blue-500 group">

                    <svg class="w-6 h-6 flex-shrink-0 group-hover:text-white text-gray-500" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M4 4a1 1 0 0 1 1-1h1.5a1 1 0 0 1 .979.796L7.939 6H19a1 1 0 0 1 .979 1.204l-1.25 6a1 1 0 0 1-.979.796H9.605l.208 1H17a3 3 0 1 1-2.83 2h-2.34a3 3 0 1 1-4.009-1.76L5.686 5H5a1 1 0 0 1-1-1Z"
                        clip-rule="evenodd" />
                </svg>
                    <span class="flex-1 ml-8 whitespace-nowrap group-hover:text-white">Keranjang</span>
                    <span
                        class="inline-flex justify-center items-center w-5 h-5 text-xs font-semibold rounded-full text-primary-800 bg-primary-100 group-hover:text-white">

                    </span>
                </a>
            </li>
            <li>
                <a href=""
                    class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg hover:bg-blue-500 group">

                    <svg version="1.1" class="flex-shrink-0 w-6 h-6 text-gray-500 group-hover:text-white"
                        fill="currentColor" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                        style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <title>checklist-glyph</title>
                        <path class="st0" d="M396.8,38.4h-57.6c-6-8-15.5-12.8-25.5-12.8h-21.4c-7.1-20-29-30.5-49-23.4c-10.9,3.9-19.5,12.5-23.4,23.4
                            h-21.4c-10.1,0-19.5,4.8-25.6,12.8h-57.6c-35.3,0.1-63.9,28.7-64,64V448c0.1,35.3,28.7,63.9,64,64h281.6c35.3-0.1,63.9-28.7,64-64
                            V102.4C460.7,67.1,432.1,38.5,396.8,38.4z M256,25.6c7.1,0,12.8,5.7,12.8,12.8s-5.7,12.8-12.8,12.8s-12.8-5.7-12.8-12.8
                            C243.2,31.3,248.9,25.6,256,25.6z M219.8,51.2c7.1,20,29,30.5,49,23.4c10.9-3.9,19.5-12.5,23.4-23.4h21.4c3.5,0,6.4,2.9,6.4,6.4V96
                            c0,3.5-2.9,6.4-6.4,6.4H198.4c-3.5,0-6.4-2.9-6.4-6.4V57.6c0-3.5,2.9-6.4,6.4-6.4L219.8,51.2z M215.4,378.3l-25.6,38.4
                            c-3.6,5.4-10.6,7.2-16.4,4.3l-25.6-12.8c-6.3-3.2-8.9-10.9-5.7-17.2c3.2-6.3,10.9-8.9,17.2-5.7l0,0l15.5,7.8l19.3-29
                            c3.9-5.9,11.8-7.6,17.7-3.7s7.6,11.8,3.7,17.7C215.5,378.2,215.5,378.2,215.4,378.3L215.4,378.3z M215.4,288.7l-25.6,38.4
                            c-3.6,5.4-10.6,7.2-16.4,4.4l-25.6-12.8c-6.3-3.2-8.9-10.9-5.7-17.2c3.2-6.3,10.9-8.9,17.2-5.7l15.5,7.8l19.3-29
                            c3.9-5.9,11.8-7.6,17.7-3.7s7.6,11.8,3.7,17.7C215.5,288.6,215.5,288.7,215.4,288.7L215.4,288.7z M215.4,199.1l-25.6,38.4
                            c-3.6,5.4-10.6,7.2-16.4,4.4L147.9,229c-6.3-3.2-8.9-10.9-5.7-17.2c3.2-6.3,10.9-8.9,17.2-5.7l0,0l15.5,7.8l19.3-29
                            c3.9-5.9,11.8-7.6,17.7-3.7c5.9,3.9,7.6,11.8,3.7,17.7C215.5,199,215.5,199,215.4,199.1L215.4,199.1z M358.5,409.6H256
                            c-7.1,0-12.8-5.7-12.8-12.8c0-7.1,5.7-12.8,12.8-12.8l0,0h102.4c7.1,0,12.8,5.7,12.8,12.8C371.2,403.9,365.5,409.6,358.5,409.6
                            L358.5,409.6z M358.5,320H256c-7.1,0-12.8-5.7-12.8-12.8c0-7.1,5.7-12.8,12.8-12.8l0,0h102.4c7.1,0,12.8,5.7,12.8,12.8
                            C371.2,314.3,365.5,320,358.5,320L358.5,320z M358.5,230.4H256c-7.1,0-12.8-5.7-12.8-12.8s5.7-12.8,12.8-12.8l0,0h102.4
                            c7.1,0,12.8,5.7,12.8,12.8S365.5,230.4,358.5,230.4L358.5,230.4z"></path>
                    </svg>
                    <span class="flex-1 ml-8 whitespace-nowrap group-hover:text-white">Riwayat Pesanan</span>
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
