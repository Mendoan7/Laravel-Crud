<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
        
        @vite('resources/css/app.css')

        <!-- Styles -->
        <style> body {font-family: 'Poppins', sans-serif;} </style>

        <link crossorigin="anonymous" href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet"/>
        <script crossorigin="anonymous" defer src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

          <style>
            .swiper-pagination {
              bottom: 0;
              position: relative;
            }

            .swiper-container {
              overflow: hidden;
            }
          </style>

    </head>
    
    <body>
        <header class="bg-white">
            <div class="px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
                <div class="relative flex items-center justify-between">
                  <a href="{{ route('login') }}" title="Company" class="inline-flex items-center">
                    <span class="ml-2 text-3xl font-bold tracking-wide text-gray-800">Sinar Cell</span>
                  </a>
                  <ul class="flex items-center hidden space-x-8 lg:flex">
                    <li><a href="/" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Home</a></li>
                    <li><a href="/" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Pantau Servis</a></li>
                    <li><a href="/" title="Product pricing" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Layanan</a></li>
                    <li><a href="/" title="About us" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Tentang Kami</a></li>
                  </ul>
                  <ul class="flex items-center hidden space-x-8 lg:flex">
                    <li>
                      <a
                        href="/"
                        class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-white transition duration-200 bg-gray-800 rounded-md focus:shadow-outline focus:outline-none"
                        title="Sign up"
                      >
                        Konsultasi Sekarang
                      </a>
                    </li>
                  </ul>
                  <!-- Mobile menu -->
                  <div class="lg:hidden">
                    <button aria-label="Open Menu" title="Open Menu" class="p-2 -mr-1 transition duration-200 rounded focus:outline-none focus:shadow-outline hover:bg-deep-purple-50 focus:bg-deep-purple-50">
                      <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M23,13H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,13,23,13z"></path>
                        <path fill="currentColor" d="M23,6H1C0.4,6,0,5.6,0,5s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,6,23,6z"></path>
                        <path fill="currentColor" d="M23,20H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,20,23,20z"></path>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
        </header>
    </body>

    <body>
            <div class="px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
                <div class="relative flex flex-col-reverse py-16 lg:pt-0 lg:flex-col lg:pb-0">
                    <div class="inset-y-0 top-0 right-0 z-0 w-full max-w-xl px-4 mx-auto md:px-0 lg:pr-0 lg:mb-0 lg:mx-0 lg:w-7/12 lg:max-w-full lg:absolute xl:px-0">
                      <svg class="absolute left-0 hidden h-full text-white transform -translate-x-1/2 lg:block" viewBox="0 0 100 100" fill="currentColor" preserveAspectRatio="none slice">
                        <path d="M50 0H100L50 100H0L50 0Z"></path>
                      </svg>
                      <img
                        class="object-cover w-full h-56 rounded shadow-lg lg:rounded-none lg:shadow-none md:h-96 lg:h-full"
                        src="https://images.unsplash.com/photo-1588515603068-adb330f26e92?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                        alt=""
                      />
                    </div>
                    <div class="relative flex flex-col items-start w-full max-w-xl px-4 mx-auto md:px-0 lg:px-8 lg:max-w-screen-xl">
                      <div class="mb-15 lg:my-40 lg:max-w-lg lg:pr-5">
                        <h1 class="tracking-wide font-bold text-5xl sm:text-4xl md:text-5xl xl:text-6xl">Yuk Service Device mu di
                          <span class="text-cyan-800">Sinar Cell</span>!</h1>
                            <p class="pr-5 mb-5 text-base text-gray-700 md:text-lg">
                                Memberikan pelayanan servis yang terbaik!
                            </p>
                            <div class="mt-4 md:mt-8">
                              <a
                                href="#"
                                class="relative inline-block group focus:outline-none focus:ring focus:ring-yellow-400">
                                <span
                                  class="relative z-10 block px-12 py-3 text-sm font-medium text-white transition bg-gray-900 rounded group-hover:scale-105">
                                  Konsultasi Sekarang
                                </span>
                    
                                <span
                                  class="absolute inset-0 transition scale-105 rounded bg-gray-900/25 -rotate-3 group-hover:rotate-0"
                                ></span>
                              </a>
                            </div>
                      </div>
                    </div>
                </div>
            </div>
    </body>

    {{-- Kelebihan --}}
    <section class="text-white bg-gray-900">
        <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
          <div class="max-w-lg mx-auto text-center">
            <h2 class="text-3xl font-bold sm:text-4xl">Kenapa Sinar Cell?</h2>
          </div>
      
          <div class="grid grid-cols-1 gap-8 mt-8 md:grid-cols-2 lg:grid-cols-3">
            <a
              class="block p-8 transition border border-gray-800 shadow-xl rounded-xl hover:shadow-cyan-500/10 hover:border-cyan-500/10"
              href="/services/digital-campaigns">
              <div class="flex justify-center text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10">
                  <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 000-1.5h-3.75V6z" clip-rule="evenodd" />
                </svg>                
              </div>
      
              <h3 class="mt-4 text-xl font-bold text-white text-center">Murah dan Jujur</h3>
      
              <p class="mt-1 text-sm text-gray-300 text-center">
                Kami menjanjikan harga yang ditawarkan dapat bersaing dan tetap mengutamakan kualitas.
              </p>
            </a>
      
            <a
              class="block p-8 transition border border-gray-800 shadow-xl rounded-xl hover:shadow-cyan-500/10 hover:border-cyan-500/10"
              href="/services/digital-campaigns">
              <div class="flex justify-center text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10">
                  <path fill-rule="evenodd" d="M11.484 2.17a.75.75 0 011.032 0 11.209 11.209 0 007.877 3.08.75.75 0 01.722.515 12.74 12.74 0 01.635 3.985c0 5.942-4.064 10.933-9.563 12.348a.749.749 0 01-.374 0C6.314 20.683 2.25 15.692 2.25 9.75c0-1.39.223-2.73.635-3.985a.75.75 0 01.722-.516l.143.001c2.996 0 5.718-1.17 7.734-3.08zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zM12 15a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75v-.008a.75.75 0 00-.75-.75H12z" clip-rule="evenodd" />
                </svg>                 
              </div>
              <h3 class="mt-4 text-xl font-bold text-white text-center">Bergaransi</h3>
              <p class="mt-1 text-sm text-gray-300 text-center">
                Garansi servis selama 14 hari. *untuk semua jenis kerusakan
              </p>
            </a>
      
            <a
              class="block p-8 transition border border-gray-800 shadow-xl rounded-xl hover:shadow-cyan-500/10 hover:border-cyan-500/10"
              href="/services/digital-campaigns">
              <div class="flex justify-center text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10">
                  <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                </svg> 
              </div>                          
              <h3 class="mt-4 text-xl font-bold text-white text-center">Berpengalaman</h3>
              <p class="mt-1 text-sm text-gray-300 text-center">
                Teknisi yang Berpengalaman dan Berkompeten.
              </p>
            </a>
          </div>
        </div>
    </section>

    {{-- Testimoni --}}
    <section>
      <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
          <h2 class="text-4xl font-bold tracking-tight text-center sm:text-5xl">
            Apa kata mereka tentang kami?
          </h2>
        <div class="mt-12 swiper-container">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <blockquote class="p-8 bg-gray-100">
                <div class="flex items-center">
                  <img
                    src="https://www.hyperui.dev/photos/man-4.jpeg"
                    alt=""
                    class="object-cover w-16 h-16 rounded-full"
                  />
    
                  <div class="ml-4 text-sm">
                    <p class="font-medium">Dayat Kaget</p>
                    <p class="mt-1">Ngasem - Kediri</p>
                  </div>
                </div>
    
                <p class="relative mt-4 text-gray-500">
                  <span class="text-xl">&ldquo;</span>
    
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt
                  consequuntur amet culpa cum itaque neque.
    
                  <span class="text-xl">&rdquo;</span>
                </p>
              </blockquote>
            </div>
    
            <div class="swiper-slide">
              <blockquote class="p-8 bg-gray-100">
                <div class="flex items-center">
                  <img
                    src="https://www.hyperui.dev/photos/man-4.jpeg"
                    alt=""
                    class="object-cover w-16 h-16 rounded-full"
                  />
    
                  <div class="ml-4 text-sm">
                    <p class="font-medium">Toha Mukena</p>
                    <p class="mt-1">Babarsari - Jogja</p>
                  </div>
                </div>
    
                <p class="relative mt-4 text-gray-500">
                  <span class="text-xl">&ldquo;</span>
    
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt
                  consequuntur amet culpa cum itaque neque.
    
                  <span class="text-xl">&rdquo;</span>
                </p>
              </blockquote>
            </div>
    
            <div class="swiper-slide">
              <blockquote class="p-8 bg-gray-100">
                <div class="flex items-center">
                  <img
                    src="https://www.hyperui.dev/photos/man-4.jpeg"
                    alt=""
                    class="object-cover w-16 h-16 rounded-full"
                  />
    
                  <div class="ml-4 text-sm">
                    <p class="font-medium">Adi Cahyadi</p>
                    <p class="mt-1">Seturan - Jogja</p>
                  </div>
                </div>
    
                <p class="relative mt-4 text-gray-500">
                  <span class="text-xl">&ldquo;</span>
    
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt
                  consequuntur amet culpa cum itaque neque.
    
                  <span class="text-xl">&rdquo;</span>
                </p>
              </blockquote>
            </div>
          </div>
    
          <div class="mt-12 swiper-pagination"></div>
        </div>
      </div>
    </section>
    
    {{-- Script Testimoni --}}
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        new Swiper('.swiper-container', {
          loop: true,
          slidesPerView: 1,
          spaceBetween: 8,
          autoplay: {
            delay: 8000,
          },
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
          breakpoints: {
            640: {
              slidesPerView: 1.5,
            },
            1024: {
              slidesPerView: 3,
            },
          },
        })
      })
    </script>

{{-- Footer --}}
    <footer class="bg-gray-900">
      <div
        class="relative max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8 lg:pt-24"
      >
        <div class="absolute top-4 sm:top-6 lg:top-8 right-4 sm:right-6 lg:right-8">
          <a
            class="inline-block p-2 text-teal-300 transition bg-gray-700 rounded-full sm:p-3 lg:p-4 hover:bg-gray-600"
            href="#MainContent"
          >
            <span class="sr-only">Back to top</span>

            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="w-5 h-5"
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path
                fill-rule="evenodd"
                d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                clip-rule="evenodd"
              />
            </svg>
          </a>
        </div>

        <div class="lg:flex lg:items-end lg:justify-between">
          <div>
            <div class="flex justify-center text-white lg:justify-start">
              <p
              class="font-bold text-5xl">
              Sinar Cell
            </p>
            </div>

            <p
              class="max-w-md mx-auto mt-6 leading-relaxed text-center text-gray-400 lg:text-left"
            >
            Jl. Joyoboyo No.22, Karangrejo, Kec. Ngasem, Kabupaten Kediri, Jawa Timur 64182
            </p>
          </div>

          <nav class="mt-12 lg:mt-0">
            <h2 class="sr-only" id="footer-navigation">Footer navigation</h2>

            <ul
              class="flex flex-wrap justify-center gap-6 lg:justify-end md:gap-8 lg:gap-12"
            >
              <li>
                <a class="text-white transition hover:text-white/75" href="/">
                  Pantau Servis
                </a>
              </li>

              <li>
                <a class="text-white transition hover:text-white/75" href="/">
                  Layanan
                </a>
              </li>

              <li>
                <a class="text-white transition hover:text-white/75" href="/">
                  Tentang Kami
                </a>
              </li>
            </ul>
          </nav>
        </div>

        <p class="mt-12 text-sm text-center text-gray-400 lg:text-right">
          Sinar Cell @2022. All rights reserved.
        </p>
      </div>
    </footer>
      

</html>
