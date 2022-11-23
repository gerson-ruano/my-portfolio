@extends('layouts.plantilla')

@section('title','home')

@section('content')

@include('layouts.navigation')

<!-- Header image -->

<div class="{{ 'bg-gradient-to-r from-indigo-800 to-pink-500' }}" id="header-img">

  <div id="heading" class="p-10 text-center">
    <h1 class=" font-sans mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl dark:text-white">Desarollador Web Full Stack</h1>
    <p class="mb-8 text-lg font-normal text-white lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">¡Hola, soy Carlos Martínez. Soy desarrolador web full stack. En esta web encontrarás todos mis proyectos y tecnologías con las que he trabajado.</p>
    <button class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
      <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0"> 
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 animate-bounce inline">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m0 0l6.75-6.75M12 19.5l-6.75-6.75" />
        </svg>
        <div class="inline px-2 "> DESCARGAR CV</div>
      </span>
    </button>
  </div>
</div>

<!-- Works section -->

<section id="works" class="{{'p-10'}}">

  <div id="block-works" class="{{'text-center : mt-5'}}">

    <h2 class="{{ 'text-3xl : font-bold' }}">Mis trabajos</h2>

  </div>

  <div id="work-cards" class="{{' mt-12 content-center grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-3 '}}">

@foreach ($works as $work)
  
    <div class="@if($work->is_visible) w-full m-2 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 @else hidden @endif">
    <a href="#">
        <img class="rounded-t-lg" src="{{ asset('storage/'. $work->img_name) }}" alt="football clubs manager website">
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$work->name}}</h5>
        </a>
        <p class="mb-4 font-normal text-gray-700 dark:text-gray-400">{{$work->description}}</p>
        @if ($work->demo_link)
          <a href="#" class="inline-flex items-center mr-2 py-2 px-3 text-sm font-medium text-center text-white bg-purple-700 rounded-lg hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300">
          <svg class="w-5 h-5 pr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> Demo
        </a>
        @endif
        @if ($work->repo_link)
        <a href="{{$work->repo_link}}" class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-gray-900 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">
          <svg fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 pr-1"><path d="M7.975 16a9.39 9.39 0 003.169-.509c-.473.076-.652-.229-.652-.486l.004-.572c.003-.521.01-1.3.01-2.197 0-.944-.316-1.549-.68-1.863 2.24-.252 4.594-1.108 4.594-4.973 0-1.108-.39-2.002-1.032-2.707.1-.251.453-1.284-.1-2.668 0 0-.844-.277-2.77 1.032A9.345 9.345 0 008 .717c-.856 0-1.712.113-2.518.34C3.556-.24 2.712.025 2.712.025c-.553 1.384-.2 2.417-.1 2.668-.642.705-1.033 1.612-1.033 2.707 0 3.852 2.342 4.72 4.583 4.973-.29.252-.554.692-.642 1.347-.58.264-2.027.692-2.933-.831-.19-.302-.756-1.045-1.549-1.032-.843.012-.34.478.013.667.428.239.919 1.133 1.032 1.422.201.567.856 1.65 3.386 1.184 0 .55.006 1.079.01 1.447l.003.428c0 .265-.189.567-.692.479 1.007.34 1.926.516 3.185.516z"></path></svg> Ver repositorio
        </a>
        @auth
         <a class=" inline-block float-right mt-1" href="{{route('admin.edit', $work)}}"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 011.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.56.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.893.149c-.425.07-.765.383-.93.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 01-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.397.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 01-.12-1.45l.527-.737c.25-.35.273-.806.108-1.204-.165-.397-.505-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.107-1.204l-.527-.738a1.125 1.125 0 01.12-1.45l.773-.773a1.125 1.125 0 011.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894z" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
         </a>
       @endauth 
        @endif
    </div>
  </div>

  @endforeach

</section>

<!-- About me section -->

<section id="about-me" class="bg-gradient-to-r from-violet-200 to-pink-200">

  <div id="block-works" class="{{'text-center : mt-5'}}">

    <h2 class="{{ 'text-3xl : font-bold : pt-12' }}">Sobre mí</h2>

  </div>

  <div id="info-card" class="{{'flex : flex-col : items-center : space-be  justify-center : w-full : pt-12 : pl-12 : pr-12 : pb-16 : md:flex-row' }}">
    
    <div class="rounded-full w-60 h-60 bg-gradient-to-r from-indigo-800 to-pink-500 flex justify-center items-center">
      <img class="rounded-full w-56 h-56 object-cover" src="{{ asset('storage/'. $user->img_name) }}" alt="My logo" width="250px" />
    </div>
    <div class="{{' max-w-550 : sm:m-10'}}">
      <h3 class=" text-3xl mb-4">Hola, mi nombre es {{$user->name}}</h3>
      <p>{{$user->description}}</p>
    </div>
  
  </div>
  </div>

</section>

<!-- Technologies section -->

<section id="technologies">
  <div id="technologies">

    <div id="block-technologies" class="{{'text-center : mt-6'}}">
  
      <h2 class="{{ 'text-3xl : font-bold : mt-8' }}">Tecnologías que uso</h2>
  
    </div>
  </div>

  <div class="w-full grid grid-cols-4 lg:grid-cols-8 gap-4 my-16 justify-items-center p-3">

  <div>
    <img src="{{ asset('storage/tech_icons/'. 'css3-icon.png') }}" class="  w-20">
  </div>
  <div>
    <img src="{{ asset('storage/tech_icons/'. 'html5-icon.png') }}" class="  w-20">
  </div>
  <div>
    <img src="{{ asset('storage/tech_icons/'. 'tailwind-icon.png') }}" class="  w-20">
  </div>
  <div>
    <img src="{{ asset('storage/tech_icons/'. 'php-icon.png') }}" class="  w-20">
  </div>
  <div>
    <img src="{{ asset('storage/tech_icons/'. 'laravel-icon.png') }}" class="  w-20">
  </div>
  <div>
    <img src="{{ asset('storage/tech_icons/'. 'mysql-icon.png') }}" class="  w-20">
  </div>
  <div>
    <img src="{{ asset('storage/tech_icons/'. 'mongo-icon.png') }}" class="  w-20">
  </div>
  <div>
    <img src="{{ asset('storage/tech_icons/'. 'git-icon.png') }}" class="  w-20">
  </div>

  </div>

</div>

<!-- Contact me section -->

<section id="contact-me">
  <div id="contact">

    <div id="block-contact" class="{{'text-center : mt-6'}}">
  
      <h2 class="{{ 'text-3xl : font-bold : mt-8' }}">Contacto</h2>
  
    </div>
  </div>

<section id="contact-form" class="{{'p-24'}}">
    <form>
      <div class="mb-6">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tu nombre</label>
        <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tu nombre" required="">
      </div>
      <div class="mb-6">  
        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tu mensaje</label>
        <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escribe aquí"></textarea>
      </div>
      <div class="mb-6">
        <button type="button" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium text-sm rounded-lg px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Enviar</button>
      </div>
    </form>
  </section>

</div>