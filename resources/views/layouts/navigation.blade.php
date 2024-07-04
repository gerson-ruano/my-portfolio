
<nav class="fixed nav-bar">
  <div class="container flex flex-wrap items-center justify-between max-w-full">
  <a href="{{route('index')}}" class="flex items-center flex-grow">
      <img src="{{ asset('images/about-me.png') }}" class="h-6 mr-3 sm:h-9 rounded-lg " alt="Gerson Ruano developer" />
      <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">
        Gerson Ruano
        <span class=" font-bold text-[#3c87d0]">
          Developer
        </span>
      </span>
  </a>
<div class="flex items-center md:order-2 @auth md:ml-8 @endauth">
  @auth
  <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
    <span class="sr-only">Open user menu</span>
    <img class="w-8 h-8 rounded-full object-cover" @auth @if(Auth::user()->img_name) src="{{ asset('storage/'. Auth::user()->img_name) }}" @else src="{{ asset('images/default-profile-image.png') }}" @endif @endauth >
  </button>
  <!-- Dropdown menu -->
  <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
    <div class="px-4 py-3">
      <span class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
      <span class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email }}</span>
    </div>
    <ul class="py-1" aria-labelledby="user-menu-button">
      <li>
        <a href="{{ route('index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
          Homepage
        </a>
      </li>
      <li>
        <a href="{{ route('admin.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
          Administrar
        </a>
      </li>
      <li>
        <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
          Mi perfil
        </a>
      </li>
      <li>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
          Cerrar sesion
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
      </li>
    </ul>
  </div>
  @endauth
  <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
    <span class="sr-only">
      Menu principal
    </span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
</button>
</div>
@if (Route::is('index'))
  <div class="items-center justify-items-end hidden w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
    <ul class="flex flex-row p-4 mt-4 border border-gray-100 rounded-lg bg-green-500 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      {{--<div class="items-center justify-items-end hidden w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
        <ul id="user-dropdown" class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-green-400 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">--}}


      <li>
        <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded  hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
            Home</a>
      </li>
      <li>
        <a href="#works" class="block py-2 pl-3 pr-4 text-gray-700 rounded  hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
          Proyectos
        </a>
      </li>
      <li>
        <a href="#about-me" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
          Sobre mí
        </a>
      </li>
      <li>
        <a href="#technologies" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
          Tecnologías
        </a>
      </li>
      <li>
        <a href="#plataform" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
          Perfiles
        </a>
      </li>
    </ul>
  </div>

  <script>
    $(document).ready(function() {
      // Cuando el usuario haga clic en un elemento del menú
      $('#user-dropdown a').on('click', function() {
        // Ocultar la parte verde del menú
        $('#mobile-menu-2').hide();
      });
    });

    </script>
@endif

</nav>
