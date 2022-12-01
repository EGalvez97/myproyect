<nav class="w-screen  bg-white border-b dark:bg-slate-900 border-slate-900/10 lg:px-8 dark:border-slate-300/10 lg:mx-0">
    <nav class="w-screen bg-white border-b dark:bg-black/40 border-slate-900/10 lg:px-8 dark:border-slate-300/10 lg:mx-0">
        <div class="px-4 mx-auto max-w-7xl sm:px-16 lg:px-20">
            <div class="relative flex items-center justify-between h-16">
                <div class="flex items-center justify-center flex-1 sm:items-stretch sm:justify-start">
                    <!-- navbar -->
                    <nav class="bg-gray-80 hidden lg:block">
                        <div class="container">
                            <div class="flex">

                                <!-- Todas las categorias -->
                                <div class=" relative left-0  px-2 py-4 flex items-center cursor-pointer group ">
                                    <span class="text-white">
                                        <i class="fas fa-bars"></i>
                                    </span>
                                    <span class="capitalize ml-2 text-white">Categorias</span>

                                    <div class="absolute left-0 top-full w-full bg-white shadow-md py-3 invisible opacity-0 group-hover:opacity-100 group-hover:visible transition duration-300 z-50 divide-y divide-gray-300 divide-dashed" style="background-color: black;">
                                        <!-- single category -->
                                        <a href="#" class="px-6 py-3 flex items-center hover:bg-gray-100 transition">
                                            <img src="img/icons/traje.jpg" class="w-5 h-5 object-contain">
                                            <span class="ml-6 text-white text-sm">Mens</span>
                                        </a>
                                        <!-- single category end -->
                                        <!-- single category -->
                                        <a href="#" class="px-6 py-3 flex items-center hover:bg-gray-100 transition">
                                            <img src="img/icons/sofa.svg" class="w-5 h-5 object-contain">
                                            <span class="ml-6 text-white text-sm">Girls</span>
                                        </a>
                                        <!-- single category end -->
                                        <!-- single category -->
                                        <a href="#" class="px-6 py-3 flex items-center hover:bg-gray-100 transition">
                                            <img src="img/icons/office.svg" class="w-5 h-5 object-contain">
                                            <span class="ml-6 text-white text-sm">Season</span>
                                        </a>
                                        <!-- single category end -->
                                        <!-- single category -->
                                        <a href="#" class="px-6 py-3 flex items-center hover:bg-gray-100 transition">
                                            <img src="img/icons/terrace.svg" class="w-5 h-5 object-contain">
                                            <span class="ml-6 text-white text-sm">Accesorios</span>
                                        </a>
                                        <!-- single category end -->
                                        <!-- single category -->
                                        <a href="#" class="px-6 py-3 flex items-center hover:bg-gray-100 transition">
                                            <img src="img/icons/bed-2.svg" class="w-5 h-5 object-contain">
                                            <span class="ml-6 text-white text-sm">Jeans</span>
                                        </a>
                                        <!-- single category end -->
                                        <!-- single category -->
                                        <a href="#" class="px-6 py-3 flex items-center hover:bg-gray-100 transition">
                                            <img src="img/icons/restaurant.svg" class="w-5 h-5 object-contain">
                                            <span class="ml-6 text-white text-sm">Shoes</span>
                                        </a>
                                        <!-- single category end -->
                                    </div>
                                </div>
                                <!-- all category end -->



                            </div>
                        </div>
                    </nav>
                    <!-- navbar end -->
                    <div class="flex items-center px-5 flex-shrink-0">
                        <a href="{{ route('home') }}">
                            <img class="rounded border-r border w-10 " src="img/logo.png" alt="logo">
                        </a>
                    </div>

                    <div class="mx-auto">

                        <div class="flex space-x-4">


                            <a href="{{ route('home') }}" class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('home') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                                Home
                            </a>
                            <a href="{{ route('posts.index') }}" class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('posts.*') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                                Blog
                            </a>
                            <input type="text" class="border-primary  rounded-l-md focus:ring-primary focus:border-primary" placeholder="Producto" style="border-color: black;">
                            <button type="submit" class="bg-primary border- text-white px-8 font-medium rounded-r-md hover:bg-transparent hover:text-primary transition" style="background-color: black; border-color: black;">
                                Search
                            </button>
                            <a href="{{ route('about') }}" class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('about') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                                About
                            </a>
                            <a href="{{ route('contact') }}" class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('contact') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                                Contact
                            </a>
                            <a href="wishlist.html" class="block text-center text-white hover:text-primary transition relative">
                                <span class="absolute -right-0 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs"></span>
                                <div class="text-2xl">
                                    <i class="far fa-heart"></i>
                                </div>
                                <div class="text-xs leading-3">Deseos</div>
                            </a>
                            <a href="cart.html" class="lg:block text-center text-white hover:text-primary transition hidden relative">
                                <span class="absolute -right-3 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs"></span>
                                <div class="text-2xl">
                                    <i class="fas fa-shopping-bag"></i>
                                </div>
                                <div class="text-xs leading-3">Bolsa</div>
                            </a>
                            <a href=" {{ route('login') }}" class="block text-center text-white hover:text-primary transition">
                                <div class="text-2xl">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="text-xs leading-3">Account</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>