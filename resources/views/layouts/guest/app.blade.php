<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PNQ Gold :: Helpdesk Pengguna</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- Styles -->
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">

    <link rel="icon" href="https://pnqgold.com.my/wp-content/uploads/2022/03/a0z-150x147.png" sizes="32x32">
    <link rel="icon" href="https://pnqgold.com.my/wp-content/uploads/2022/03/a0z.png" sizes="192x192">

    <style>
        .gradient {
            background: linear-gradient(45deg, #DBB630 0%, #3F45AA 90%);
        }

    </style>

    @routes
    <script src="{{ asset(mix('js/app.js')) }}"></script>
</head>

<body class="leading-normal tracking-normal gradient">
    <!--Nav-->
    <nav id="header" class="fixed top-0 z-30 w-full">
        <div class="container flex flex-wrap items-center justify-between w-4/5 py-2 mx-auto mt-0">
            <div class="flex items-center pl-4">
                <a class="font-bold no-underline text-md toggleColour hover:no-underline lg:text-4xl" href="https://pnqgold.com.my/">
                    <img src="https://pnqgold.com.my/wp-content/uploads/2022/03/Untitled.png" class="inline h-8 mr-3 sm:h-16" alt="PNQ Gold Logo">
                    <span class="invisible lg:visible">PNQ GOLD SDN BHD</span> </a>
            </div>
            <div class="block pr-4 lg:hidden">
                <button id="nav-toggle" class="flex items-center p-1 text-pink-800 transition duration-300 ease-in-out transform focus:shadow-outline hover:scale-105 hover:text-gray-900 focus:outline-none">
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
            <div class="z-20 flex-grow hidden w-full p-4 mt-2 text-black bg-white lg:mt-0 lg:flex lg:w-auto lg:items-center lg:bg-transparent lg:p-0" id="nav-content">
                <ul class="items-center justify-end flex-1 list-reset lg:flex">
                    <li class="mr-3">
                        @auth
                            <a class="inline-block px-4 py-2 font-bold text-black no-underline hover:text-underline hover:text-yellow-400" href="{{ route('login') }}">DASHBOARD</a>
                        @else
                            <a class="inline-block px-4 py-2 font-bold text-black no-underline hover:text-underline hover:text-yellow-400" href="{{ route('login') }}">LOG MASUK</a>
                        @endauth
                    </li>
                </ul>
            </div>
        </div>
        <hr class="py-0 my-0 border-b border-gray-100 opacity-25" />
    </nav>
    <!--Hero-->
    <div class="pt-16">

    </div>
    <div class="relative -mt-12 lg:-mt-24">
        <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
                    <path d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                        opacity="0.100000001"></path>
                    <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
                </g>
                <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <path
                        d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z">
                    </path>
                </g>
            </g>
        </svg>
    </div>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content">
            @yield('content')
        </section>
    </div>

    <!-- Main Footer -->
    <footer class="p-4 bg-white rounded-lg shadow dark:bg-gray-800 md:px-6 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">

        </div>
        <span class="block text-sm text-gray-500 dark:text-gray-400 sm:text-center">
            © 2022 <a href="https://pnqgold.com.my/" class="hover:text-blue-400 hover:underline">PNQ GOLD SDN BHD</a>. All Rights Reserved.
        </span>
    </footer>

    <script>
        var scrollpos = window.scrollY;
        var header = document.getElementById("header");
        var navcontent = document.getElementById("nav-content");
        var navaction = document.getElementById("navAction");
        var brandname = document.getElementById("brandname");
        var toToggle = document.querySelectorAll(".toggleColour");

        document.addEventListener("scroll", function() {
            /*Apply classes for slide in bar*/
            scrollpos = window.scrollY;

            if (scrollpos > 10) {
                header.classList.add("bg-white");
                navaction.classList.remove("bg-white");
                navaction.classList.add("gradient");
                navaction.classList.remove("text-gray-800");
                navaction.classList.add("text-white");
                //Use to switch toggleColour colours
                for (var i = 0; i < toToggle.length; i++) {
                    toToggle[i].classList.add("text-gray-800");
                    toToggle[i].classList.remove("text-white");
                }
                header.classList.add("shadow");
                navcontent.classList.remove("bg-gray-100");
                navcontent.classList.add("bg-white");
            } else {
                header.classList.remove("bg-white");
                navaction.classList.remove("gradient");
                navaction.classList.add("bg-white");
                navaction.classList.remove("text-white");
                navaction.classList.add("text-gray-800");
                //Use to switch toggleColour colours
                for (var i = 0; i < toToggle.length; i++) {
                    toToggle[i].classList.add("text-white");
                    toToggle[i].classList.remove("text-gray-800");
                }

                header.classList.remove("shadow");
                navcontent.classList.remove("bg-white");
                navcontent.classList.add("bg-gray-100");
            }
        });
    </script>
    <script>
        /*Toggle dropdown list*/
        /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

        var navMenuDiv = document.getElementById("nav-content");
        var navMenu = document.getElementById("nav-toggle");

        document.onclick = check;

        function check(e) {
            var target = (e && e.target) || (event && event.srcElement);

            //Nav Menu
            if (!checkParent(target, navMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, navMenu)) {
                    // click on the link
                    if (navMenuDiv.classList.contains("hidden")) {
                        navMenuDiv.classList.remove("hidden");
                    } else {
                        navMenuDiv.classList.add("hidden");
                    }
                } else {
                    // click both outside link and outside menu, hide menu
                    navMenuDiv.classList.add("hidden");
                }
            }
        }

        function checkParent(t, elm) {
            while (t.parentNode) {
                if (t == elm) {
                    return true;
                }
                t = t.parentNode;
            }
            return false;
        }
    </script>
</body>

</html>
