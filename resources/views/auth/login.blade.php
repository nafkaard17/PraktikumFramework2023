<!--

=========================================================
* Notus Tailwind JS - v1.1.0 based on Tailwind Starter Kit by Creative Tim
=========================================================

* Product Page: https://www.creative-tim.com/product/notus-js
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md)

* Tailwind Starter Kit Page: https://www.creative-tim.com/learning-lab/tailwind-starter-kit/presentation

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" />
    <link
        rel="apple-touch-icon"
        sizes="76x76"
        href="{{ asset('assets/img/apple-icon.png') }}"
    />
    <link
        rel="stylesheet"
        href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
    />
    <link rel="stylesheet" href="{{ asset('assets/styles/tailwind.css') }}">
    @vite('resources/css/style.css')
    <title>Login</title>
</head>
<body class="text-blueGray-700">
<main>
    <section class="relative w-full h-full py-40 min-h-screen">
        <div
            class="absolute top-0 w-full h-full bg-blueGray-800 bg-full bg-no-repeat bg-[url('../../../public/assets/img/register_bg_2.png')]"
        ></div>
        <div class="container mx-auto px-4 h-full">
            <div class="flex content-center items-center justify-center h-full">
                <div class="w-full lg:w-4/12 px-4">
                    <div
                        class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0"
                    >
                        <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                            <div class="text-blueGray-400 text-center my-12 font-bold">
                                <h1 class="text-3xl">Login</h1>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <!-- Email Address -->
                                <div>
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                    <x-input-label for="password" :value="__('Password')" />

                                    <x-text-input id="password" class="block mt-1 w-full"
                                                  type="password"
                                                  name="password"
                                                  required autocomplete="current-password" />

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                                <div class="flex mt-4 justify-between">
                                    <label class="inline-flex items-center cursor-pointer"
                                    ><input
                                            id="customCheckLogin"
                                            type="checkbox"
                                            class="form-checkbox border-0 rounded text-blueGray-700 ml-1 w-5 h-5 ease-linear transition-all duration-150"
                                        /><span
                                            class="ml-2 text-sm font-semibold text-blueGray-600"
                                        >Remember me</span
                                        ></label
                                    >
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                                        {{ __('Belum punya akun?') }}
                                    </a>
                                </div>
                                <div class="text-center mt-6">
                                    <button
                                        class="bg-sky-950 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                                        type="submit"
                                    >
                                        Sign In
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="flex flex-wrap mt-6">
                        <div class="w-1/2">
                            <a href="#pablo" class="text-blueGray-200"
                            ><small>Forgot password?</small></a
                            >
                        </div>
                        <div class="w-1/2 text-right">
                            <a href="./register.html" class="text-blueGray-200"
                            ><small>Create new account</small></a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="absolute w-full bottom-0 bg-blueGray-800 pb-6">
            <div class="container mx-auto px-4">
                <hr class="mb-6 border-b-1 border-blueGray-600" />
                <div
                    class="flex flex-wrap items-center md:justify-between justify-center"
                >
                    <div class="w-full md:w-4/12 px-4">
                        <div
                            class="text-sm text-white font-semibold py-1 text-center md:text-left"
                        >
                            Copyright © <span id="get-current-year"></span>
                            <a
                                href="https://www.creative-tim.com?ref=njs-login"
                                class="text-white hover:text-blueGray-300 text-sm font-semibold py-1"
                            >Creative Tim</a
                            >
                        </div>
                    </div>
                    <div class="w-full md:w-8/12 px-4">
                        <ul
                            class="flex flex-wrap list-none md:justify-end justify-center"
                        >
                            <li>
                                <a
                                    href="https://www.creative-tim.com?ref=njs-login"
                                    class="text-white hover:text-blueGray-300 text-sm font-semibold block py-1 px-3"
                                >Creative Tim</a
                                >
                            </li>
                            <li>
                                <a
                                    href="https://www.creative-tim.com/presentation?ref=njs-login"
                                    class="text-white hover:text-blueGray-300 text-sm font-semibold block py-1 px-3"
                                >About Us</a
                                >
                            </li>
                            <li>
                                <a
                                    href="http://blog.creative-tim.com?ref=njs-login"
                                    class="text-white hover:text-blueGray-300 text-sm font-semibold block py-1 px-3"
                                >Blog</a
                                >
                            </li>
                            <li>
                                <a
                                    href="https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md?ref=njs-login"
                                    class="text-white hover:text-blueGray-300 text-sm font-semibold block py-1 px-3"
                                >MIT License</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </section>
</main>
</body>
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
<script>
    /* Make dynamic date appear */
    (function () {
        if (document.getElementById("get-current-year")) {
            document.getElementById("get-current-year").innerHTML =
                new Date().getFullYear();
        }
    })();
    /* Function for opning navbar on mobile */
    function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("block");
    }
    /* Function for dropdowns */
    function openDropdown(event, dropdownID) {
        let element = event.target;
        while (element.nodeName !== "A") {
            element = element.parentNode;
        }
        Popper.createPopper(element, document.getElementById(dropdownID), {
            placement: "bottom-start"
        });
        document.getElementById(dropdownID).classList.toggle("hidden");
        document.getElementById(dropdownID).classList.toggle("block");
    }
</script>
</html>




