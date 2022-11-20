@extends('layouts.plantilla')

@section('title','home')

@section('content')

@include('layouts.navigation')

<!-- Header image -->

<div class="{{ 'bg-indigo-500 : h-80 : bg-[url("../images/header-background.jpg")] ' }}" id="header-img">

  <div id="heading" class="p-10 text-center">
    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl dark:text-white">Desarollador Web Full Stack</h1>
    <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">¡Hola, soy Carlos Martínez. Soy desarrolador web full stack. En esta web encontrarás todos mis proyectos y tecnologías con las que he trabajado.</p>
    <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
      Ver trabajos
      <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </a>
  </div>
</div>

<!-- Works section -->

<section id="works" class="{{'p-10'}}">

  <div id="block-works" class="{{'text-center : mt-5'}}">

    <h2 class="{{ 'text-3xl : font-bold' }}">Mis trabajos</h2>
    <div class="{{'mt-2 : mb-6'}}">Estos son mis trabajos actuales</div>

  </div>

  <div id="work-cards" class="{{'content-center grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-3 '}}">

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
          <a href="#" class="inline-flex items-center mr-2 py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
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

<section id="about-me" class="bg-slate-100 pt-6">

  <div id="block-works" class="{{'text-center : mt-5'}}">

    <h2 class="{{ 'text-3xl : font-bold' }}">Sobre mí</h2>
    <div class="{{'mt-2'}}">Alguna información sobre mí</div>

  </div>

  <div id="info-card" class="{{'flex : flex-col : items-center : justify-center : w-full : pt-12 : pl-12 : pr-12 : pb-16 : md:flex-row' }}">
    
    <div><img src="{{url('/../resources/images/foto-perfil-web.png');}}" alt="My logo" width="250px" />
    </div>
    <div class="{{'w-96 : sm:m-10'}}">Vengo del sector del marketing y la publicidad, pero desde hace tiempo he dedicado parte de mi tiempo libre a crear páginas web aprendiendo de manera autodidacta. En los últimos tiempos he decidido reorientar mi carrera formándome como desarrollador web y dedicar todo mi tiempo a mi verdadera pasión.</div>
  
  </div>
  </div>

</section>

<!-- Contact me section -->

<section id="contact-me">
  <div id="contact">

    <div id="block-contact" class="{{'text-center : mt-5'}}">
  
      <h2 class="{{ 'text-3xl : font-bold' }}">Contacto</h2>
      <div class="{{'mt-2'}}">Contacta conmigo</div>
  
    </div>
  </div>

<section id="contact-form" class="{{'p-24'}}">
    <form>
      <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
        <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required="">
      </div>
      <div class="mb-6">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your password</label>
        <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
      </div>
      <div class="flex items-start mb-6">
        <div class="flex items-center h-5">
          <input id="remember" type="checkbox" value="" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required="">
        </div>
        <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
      </div>
      <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
  </section>

</div>

@endsection