<?php session_start() ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SHARK HELMET'S | HEADTURNERS</title>

    <?php
    include "connect.php";
    include "include/header_link.php";

    // navigation bar 
    include 'include/navbar.php';
    ?>

</head>


<body class="antialiased bg-gray-300">

    <section class="py-32 ">

        <div class="container flex flex-wrap items-center pt-4 pb-12 mx-auto">

            <nav id="shark" class="top-0 z-30 w-full px-6 py-1">
                <div class="container flex flex-wrap items-center justify-between w-full px-2 py-3 mx-auto mt-0">

                    <a class="text-xl font-bold tracking-wide text-gray-800 no-underline uppercase hover:no-underline "
                        href="#">
                        SHARK HELMETS
                    </a>
                </div>
            </nav>

            <div class="flex flex-col w-full p-6 md:w-1/3 xl:w-1/4 wow fadeInUp group " data-wow-delay=".2s">
                <a href="#">
                    <img class="w-full transition group-hover:rotate-6 group-hover:scale-125"
                        src="https://i.ibb.co/Zf240Jj/shark-racerpro-gp-martinator.png">
                    <div class="flex items-center justify-between pt-3">
                        <p class="">Shark RacerPro GP Martinator</p>
                        <svg class="w-6 h-6 text-gray-500 fill-current hover:text-black"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path
                                d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z" />
                        </svg>
                    </div>
                    <p class="pt-1 text-red-800">₱47,000.00</p>
                </a>
            </div>

            <div class="flex flex-col w-full p-6 md:w-1/3 xl:w-1/4 wow fadeInUp group " data-wow-delay=".2s">
                <a href="#">
                    <img class="w-full transition group-hover:rotate-6 group-hover:scale-125"
                        src="https://i.ibb.co/kc4GMs2/shark-skwal2-iker-lecuona-nero-removebg-preview.png">
                    <div class="flex items-center justify-between pt-3">
                        <p class="">Shark SKWAL2 Iker Lecuona Nero</p>
                        <svg class="w-6 h-6 text-gray-500 fill-current hover:text-black"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path
                                d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z" />
                        </svg>
                    </div>
                    <p class="pt-1 text-red-800">₱12,670.00</p>
                </a>
            </div>

            <div class="flex flex-col w-full p-6 md:w-1/3 xl:w-1/4 wow fadeInUp group " data-wow-delay=".2s">
                <a href="#">
                    <img class="w-full transition group-hover:rotate-6 group-hover:scale-125"
                        src="https://i.ibb.co/0JX2w0V/shark-d-skwal-2-shigan-full-face-helmet.png">
                    <div class="flex items-center justify-between pt-3">
                        <p class="">Shark D SKWAL2 Shigan Full Face Helmet</p>
                        <svg class="w-6 h-6 text-gray-500 fill-current hover:text-black"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path
                                d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z" />
                        </svg>
                    </div>
                    <p class="pt-1 text-red-800">₱9.99</p>
                </a>
            </div>

            <div class="flex flex-col w-full p-6 md:w-1/3 xl:w-1/4 wow fadeInUp group " data-wow-delay=".2s">
                <a href="#">
                    <img class="w-full transition group-hover:rotate-6 group-hover:scale-125"
                        src="https://i.ibb.co/ZTvfv4Y/shark-evo-es-k-rozen-full-face-helmet.png">
                    <div class="flex items-center justify-between pt-3">
                        <p class="">Shark EVO es k Rozen Full Face Helmet</p>
                        <svg class="w-6 h-6 text-gray-500 fill-current hover:text-black"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path
                                d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z" />
                        </svg>
                    </div>
                    <p class="pt-1 text-red-800">₱16,850.00</p>
                </a>
            </div>

            <div class="flex flex-col w-full p-6 md:w-1/3 xl:w-1/4 wow fadeInUp group " data-wow-delay=".2s">
                <a href="#">
                    <img class="w-full transition group-hover:rotate-6 group-hover:scale-125"
                        src="https://i.ibb.co/wKkbqxT/shark-spartan-gt-carbon-full-face-helmet.png">
                    <div class="flex items-center justify-between pt-3">
                        <p class="">Shark Spartan GT Carbon Full Face Helmet</p>
                        <svg class="w-6 h-6 text-gray-500 fill-current hover:text-black"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path
                                d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z" />
                        </svg>
                    </div>
                    <p class="pt-1 text-red-800">₱23,380.00</p>
                </a>
            </div>

            <div class="flex flex-col w-full p-6 md:w-1/3 xl:w-1/4 wow fadeInUp group " data-wow-delay=".2s">
                <a href="#">
                    <img class="w-full transition group-hover:rotate-6 group-hover:scale-125"
                        src="https://i.ibb.co/TYyBBT5/shark-spartan-gt-pro-ritmo-rosso-removebg-preview.png">
                    <div class="flex items-center justify-between pt-3">
                        <p class="">Shark Spartan GT Pro Carbon Ritmo Helmet</p>
                        <svg class="w-6 h-6 text-gray-500 fill-current hover:text-black"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path
                                d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z" />
                        </svg>
                    </div>
                    <p class="pt-1 text-red-800">₱22,390.00</p>
                </a>
            </div>

            <div class="flex flex-col w-full p-6 md:w-1/3 xl:w-1/4 wow fadeInUp group " data-wow-delay=".2s">
                <a href="#">
                    <img class="w-full transition group-hover:rotate-6 group-hover:scale-125"
                        src="https://i.ibb.co/0KccRZY/shark-spartan-gt-carbon-skin-full-face-helmet.png">
                    <div class="flex items-center justify-between pt-3">
                        <p class="">Shark Spartan GT Carbon Skin Full Face Helmet</p>
                        <svg class="w-6 h-6 text-gray-500 fill-current hover:text-black"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path
                                d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z" />
                        </svg>
                    </div>
                    <p class="pt-1 text-red-800">₱9.99</p>
                </a>
            </div>

            <div class="flex flex-col w-full p-6 md:w-1/3 xl:w-1/4 wow fadeInUp group " data-wow-delay=".2s">
                <a href="#">
                    <img class="w-full transition group-hover:rotate-6 group-hover:scale-125"
                        src="https://i.ibb.co/dG9HdjM/shark-spartan-rs-byhron-full-face-helmet.png">
                    <div class="flex items-center justify-between pt-3">
                        <p class="">Shark Spartan RS Byhron Full Face Helmet</p>
                        <svg class="w-6 h-6 text-gray-500 fill-current hover:text-black"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path
                                d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z" />
                        </svg>
                    </div>
                    <p class="pt-1 text-red-800">₱16,350.00</p>
                </a>
            </div>

            <div class="flex flex-col w-full p-6 md:w-1/3 xl:w-1/4 wow fadeInUp group " data-wow-delay=".2s">
                <a href="#">
                    <img class="w-full transition group-hover:rotate-6 group-hover:scale-125"
                        src="https://i.ibb.co/XVMY8qS/shark-spartan-rs-replica-zarco-austin-full-face-helmet.png">
                    <div class="flex items-center justify-between pt-3">
                        <p class="">Shark Spartan RS Replica Zarco Austin Full Face Helmet</p>
                        <svg class="w-6 h-6 text-gray-500 fill-current hover:text-black"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path
                                d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z" />
                        </svg>
                    </div>
                    <p class="pt-1 text-red-800">₱47,004.00</p>
                </a>
            </div>

        </div>

    </section>

    <section class="">

        <div class="container px-6 mx-auto">

            <a class="mb-8 text-xl font-bold tracking-wide text-gray-800 no-underline uppercase hover:no-underline"
                href="#">
                About SHARK MOTORCYCLE HELMETS
            </a>

            <p class="mt-8 mb-2">Shark Helmets is a French motorcycle helmet manufacturer founded in 1986. The company
                is known for its high-quality, innovative helmets that offer superior protection and style for
                motorcyclists.
                <br>
            <p class="mt-8 mb-20">Shark helmets are designed and manufactured using advanced technologies and materials,
                such as
                carbon fiber and Kevlar, to provide maximum protection and comfort for riders. The company offers a wide
                range of helmet styles, including full-face, modular, and open-face helmets, as well as specialized
                helmets for racing and off-road use.

                In addition to their focus on safety and performance, Shark Helmets also places a strong emphasis on
                design, with many of their helmets featuring bold graphics and unique styling. The company is a favorite
                among motorcyclists around the world, and their helmets are often used by professional racers in MotoGP
                and other racing circuits.</p>

        </div>

    </section>


    <div class="flex items-center justify-center px-4 py-12 md:px-6 2xl:px-0 2xl:container 2xl:mx-auto">
        <div class="flex flex-col items-start justify-start w-full space-y-8">
            <div class="flex items-start justify-start">
                <p class="text-3xl font-semibold leading-7 text-gray-800 lg:text-4xl lg:leading-9 dark:text-white ">
                    Customer Reviews</p>
            </div>


            <!-- product 1 -->
            <div class="flex flex-col items-start justify-start w-full p-8 bg-gray-50 dark:bg-gray-800">
                <div class="flex flex-col justify-between w-full md:flex-row">
                    <div class="flex flex-row items-start justify-between">
                        <p class="text-xl font-medium leading-normal text-gray-800 md:text-2xl dark:text-white">
                            Shark Spartan GT Carbon Skin Full Face Helmet</p>
                    </div>
                    <!-- STAR RATING  -->
                    <div class="flex items-center mb-4 text-yellow-300">
                        <svg aria-hidden="true" class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg aria-hidden="true" class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg aria-hidden="true" class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg aria-hidden="true" class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg aria-hidden="true" class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                    </div>

                    <!-- STAR RATING  -->
                </div>

                <div id="menu" class="md:block">
                    <p class="w-full mt-3 text-base leading-normal text-gray-600 dark:text-white md:w-9/12 xl:w-5/6">
                        high-quality and good Customer service
                    </p>
                    <div class="flex-row items-start justify-start hidden mt-6 space-x-4 md:flex">
                        <div>
                            <a target="_blank"
                                href="https://scontent.fmnl13-2.fna.fbcdn.net/v/t1.6435-9/89665440_124012725853354_6280785291192041472_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeH1Wv9c4Xr5baZ0rFlVhvfq0wGfmIISmrHTAZ-YghKasVOwFILHcWlUgU1IXQ65V0Q2H4Sn3deIKyreqkiAyoB0&_nc_ohc=HIiGcUeGA0oAX-RquP4&_nc_ht=scontent.fmnl13-2.fna&oh=00_AfBia3MdaWh8NbvcoQhyTnrjrF431rQ1ZiuS3UxlrHsfcQ&oe=64818D86">
                                <img class="h-32"
                                    src="https://scontent.fmnl13-2.fna.fbcdn.net/v/t1.6435-9/89665440_124012725853354_6280785291192041472_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeH1Wv9c4Xr5baZ0rFlVhvfq0wGfmIISmrHTAZ-YghKasVOwFILHcWlUgU1IXQ65V0Q2H4Sn3deIKyreqkiAyoB0&_nc_ohc=HIiGcUeGA0oAX-RquP4&_nc_ht=scontent.fmnl13-2.fna&oh=00_AfBia3MdaWh8NbvcoQhyTnrjrF431rQ1ZiuS3UxlrHsfcQ&oe=64818D86"
                                    alt="product1" />
                            </a>
                        </div>
                        <div>
                            <img class="h-32"
                                src="https://scontent.fmnl13-2.fna.fbcdn.net/v/t1.6435-9/89873814_124012762520017_8161881211929624576_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGMVZcbjCbevBd2rVtDQSlzwTmsZPQl16DBOaxk9CXXoB3-oymJubJkwsYhwW5serwSauujR_-u23aCr19Ebki2&_nc_ohc=eD0ZPp5j1wkAX-iVMAO&_nc_ht=scontent.fmnl13-2.fna&oh=00_AfDWMxDK1_7oOsQCTrvfHn5Jzn8RH9gD8tT270xk8cKpBg&oe=64817D1A"
                                alt="product2" />
                        </div>
                        <div class="hidden md:block">
                            <img class="h-32"
                                src="https://scontent.fmnl13-2.fna.fbcdn.net/v/t1.6435-9/89833222_124012799186680_8106668664310202368_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeED4eXh2VKdTcmGeHnxEJkvgkhcMy3wNiuCSFwzLfA2K6GDGgiMcTf-_jZ1oHmh06T-SbniAA9FkPmiUR2ef7sX&_nc_ohc=Ryd6qvTLWWUAX8A-BoN&_nc_ht=scontent.fmnl13-2.fna&oh=00_AfBqtMGCawgTcnbbLafdoy_G4TN8w1gvGI_umiDLLQlViQ&oe=648188D5"
                                alt="product3" />
                        </div>
                    </div>
                    <div class="pt-8 md:hidden carousel cursor-none"
                        data-flickity='{ "wrapAround": true,"pageDots": false }'>
                        <div class="carousel-cell">
                            <div class="relative h-full md:w-full">
                                <img src="https://i.ibb.co/QXzVpHp/vincent-wachowiak-8g-Cm-EBVl6a-I-unsplash-1.png"
                                    alt="bag" class="object-cover w-full h-full object-fit" />
                            </div>
                        </div>
                        <div class="carousel-cell">
                            <div class="relative h-full md:w-full">
                                <img src="https://i.ibb.co/znYKsbc/vincent-wachowiak-z-P316-KSOX0-E-unsplash-1.png"
                                    alt="shoes" class="object-cover w-full h-full object-fit" />
                            </div>
                        </div>
                        <div class="carousel-cell">
                            <div class="relative h-full md:w-full">
                                <img src="https://i.ibb.co/QXzVpHp/vincent-wachowiak-8g-Cm-EBVl6a-I-unsplash-1.png"
                                    alt="wallet" class="object-cover w-full h-full object-fit" />
                            </div>
                        </div>
                        <div class="carousel-cell">
                            <div class="relative h-full md:w-full">
                                <img src="https://i.ibb.co/znYKsbc/vincent-wachowiak-z-P316-KSOX0-E-unsplash-1.png"
                                    alt="wallet" class="object-cover w-full h-full object-fit" />
                            </div>
                        </div>
                        <div class="carousel-cell">
                            <div class="relative h-full md:w-full">
                                <img src="https://i.ibb.co/QXzVpHp/vincent-wachowiak-8g-Cm-EBVl6a-I-unsplash-1.png"
                                    alt="wallet" class="object-cover w-full h-full object-fit" />
                            </div>
                        </div>
                        <div class="carousel-cell">
                            <div class="relative h-full md:w-full">
                                <img src="https://i.ibb.co/znYKsbc/vincent-wachowiak-z-P316-KSOX0-E-unsplash-1.png"
                                    alt="wallet" class="object-cover w-full h-full object-fit" />
                            </div>
                        </div>
                        <div class="carousel-cell"></div>
                    </div>
                    <div class="mt-6 flex justify-start items-center flex-row space-x-2.5">
                        <div>
                            <img src="https://i.ibb.co/QcqyrVG/Mask-Group.png" alt="girl-avatar" />
                        </div>
                        <div class="flex flex-col items-start justify-start space-y-2">
                            <p class="text-base font-medium leading-none text-gray-800 dark:text-white">Anna Kendrick
                            </p>
                            <p class="text-sm leading-none text-gray-600 dark:text-white">14 July 2021</p>
                        </div>
                    </div>
                </div>


                <!-- PRODUCCT 2 -->




            </div>
        </div>
    </div>
    <style>
        .carousel-cell {
            width: 150px;
            height: 150px;

            margin-right: 24px;
            counter-increment: carousel-cell;
        }

        .carousel-cell:before {
            display: block;
            width: 20%;
        }

        .flickity-slider {
            position: absolute;
            width: 100%;
            height: 100%;
            left: -260px !important;
        }

        .flickity-button {
            position: absolute !important;
            inset: 0 !important;
            top: 50% !important;
            left: 80% !important;
            background: white;
            border: 0px;
            color: #27272a;
        }

        .flickity-prev-next-button:hover {
            background-color: #27272a;
            color: white;
        }

        .flickity-prev-next-button.previous {
            visibility: hidden;
        }

        .flickity-prev-next-button.next {
            margin-left: 50px;
            width: 48px;
            height: 48px;
            visibility: hidden;
        }

        .flickity-enabled.is-draggable .flickity-viewport {
            cursor: none;
            cursor: default;
        }

        .flickity-prev-next-button .flickity-button-icon {
            margin-left: 2px;
            margin-top: 2px;
            width: 24px;
            height: 24px;
        }
    </style>







    <!-- ====== Forms Section End -->

    <?php
    // navigation bar 
    include 'contact.php';
    // navigation bar 
    include 'include/footer.php';
    // footer link
    include "include/footer_link.php";
    ?>



</body>

</html>