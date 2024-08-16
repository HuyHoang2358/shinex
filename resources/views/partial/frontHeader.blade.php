<div class="shadow fixed z-50 w-full">
    <div class="container mx-auto lg:px-36 ">
    <nav class="w-full bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700">
        <div class="flex flex-wrap items-center justify-between mx-auto px-4 py-2.5">
            <a href="{{url('/')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{asset('/images/logo/logo.png')}}" class="h-10" alt="shinex-logo" />
            </a>

            <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 ms-3 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-dropdown" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>

            <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                <ul class="flex flex-col font-medium p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:mt-0 md:text-sm  md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700 md:space-x-8 md:rtl:space-x-reverse">
                    <li>
                        <a href="{{url('/')}}" class="block py-2 px-3  rounded  text-gray-700 md:p-0 {{$page == 'homepage' ? 'md:text-blue-700' : ''}}" aria-current="page">Trang chủ</a>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-gray-700 {{$page == 'product' ? 'md:text-blue-700' : ''}} rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                            Sản phẩm
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a class="block px-4 py-2 hover:bg-gray-100" href="{{route('product.detail', 'whitening-remove-freckle-cream')}}">  Whitening Remove Freckle Cream </a>
                                </li>
                                <li>
                                    <a class="block px-4 py-2 hover:bg-gray-100" href="{{route('product.detail', 'repair-anti-aging-cream')}}"> Repair Anti-Aging Cream</a>
                                </li>
                                <li>
                                    <a class="block px-4 py-2 hover:bg-gray-100" href="{{route('product.detail', 'soothing-balance-repair-cream')}}"> Soothing balance repair cream </a>
                                </li>
                                <li>
                                    <a class="block px-4 py-2 hover:bg-gray-100" href="{{route('product.detail', 'soothing-and-restoring-essential-oils')}}"> Serum smoothing and restoring essential oils </a>
                                </li>
                                <li>
                                    <a class="block px-4 py-2 hover:bg-gray-100" href="{{route('product.detail', 'repairing-active-white-serum')}}"> Repairing active white serum </a>
                                </li>
                                <li>
                                    <a class="block px-4 py-2 hover:bg-gray-100" href="{{route('product.detail', 'polypeptide-heal-damaged-skin-ice-crystal')}}">  Polypeptide </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="{{route('about')}}" class="block py-2 px-3 text-gray-700 {{$page == 'about' ? 'md:text-blue-700' : ''}} rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Về chúng tôi</a>
                    </li>
                    <li>
                        <a href="{{route('contact')}}" class="block py-2 px-3 {{$page == 'contact' ? 'md:text-blue-700' : ''}} text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </div>
</div>


