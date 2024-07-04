<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Desarrolador Web en PHP, Laravel, Mysql, HTML, CSS, Tailwind y más">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/about-me.png') }}"  />


    {{--<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>--}}

    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<div id="root">
<body class="nav-bar">
    @yield('content')
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</body>

<footer class="p-4 bg-white rounded-lg shadow md:px-6 md:py-4 dark:bg-gray-900">
  <div class="sm:flex sm:items-center sm:justify-between">
      <a href="{{route('index')}}" class="flex items-center mb-4 sm:mb-0">
        {{--<img src="{{ asset('storage/full-stack.png') }}" class="h-6 mr-3 sm:h-9" alt="Gerson Desarrollador Web" />--}}
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-section text-gray-600">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
          </svg>

        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">
            Gerson Ruano
            <span class=" font-bold text-[#3c87d0] md:ml-4">Developer</span>
        </span>
      </a>
      <ul class="flex flex-wrap items-center mb-6 text-sm text-gray-500 sm:mb-0 dark:text-gray-400">
          <li>
              <a href="#works" class="mr-4 hover:underline md:mr-6">Mis proyectos</a>
          </li>
          <li>
            <a href="#about-me" class="mr-4 hover:underline md:mr-6 ">Sobre mí</a>
        </li>
          <li>
            <a href="#technologies" class="mr-4 hover:underline md:mr-6">Tecnologías</a>
        </li>
        <li>
            <a href="#plataform" class="mr-4 hover:underline md:mr-6 ">Perfiles</a>
        {{--</li>
          <li>
              <a href="#contact" class="mr-4 hover:underline md:mr-6 ">Contacto</a>
          </li>--}}
      </ul>
  </div>
  <hr class="my-6 border-gray-300 sm:mx-auto dark:border-gray-700 lg:my-8">
  <span class="block text-sm text-gray-600 sm:text-center dark:text-gray-400">Portfolio <span>Gerson Ruano</span> 2023
  </span>
</footer>
</div>
</html>
