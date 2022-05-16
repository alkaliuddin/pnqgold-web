<nav class="rounded border-gray-200 bg-white px-2 py-2.5 sm:px-4">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="{{ route('welcome') }}" class="flex items-center">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-9" alt="PNQ Gold Logo">
            <span class="self-center text-xl font-semibold text-black whitespace-nowrap">PNQ Gold Sdn Bhd</span>
        </a>
        <div class="items-center justify-between hidden w-full md:order-1 md:flex md:w-auto" id="mobile-menu-4">
            <ul class="flex flex-col mt-4 md:mt-0 md:flex-row md:space-x-8 md:text-sm md:font-medium">
                <li>
                    <a href="{{ route('welcome') }}" class="block py-2 pl-3 pr-4 bg-blue-700 rounded md:bg-transparent md:p-0 md:text-blue-700" aria-current="page">Utama</a>
                </li>
                <li>
                    <a href="{{ route('about') }}"
                        class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-blue-700">Mengenai
                        Kami</a>
                </li>
                <li>
                    <a href="{{ route('services') }}"
                        class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-blue-700">Perkhidmatan</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}"
                        class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-blue-700">Hubungi
                        Kami</a>
                </li>
                @if (Route::has('login'))
                    @auth
                        <li>
                            <a href="{{ route('dashboard') }}"
                                class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-blue-700">Helpdesk
                                Panel</a>
                        </li>
                    @else
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-blue-700">Helpdesk</a>
                        </li>
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>
