@extends('layouts.plantilla')

@section('title','Editar trabajo')

@section('content')

@include('layouts.navigation')

@if (Session::has('msg'))

@include('components.alert')

@endif

<!-- user section -->

<section class="p-10 bg-slate-200">
  <form action="{{route('profile.update')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div id="user-card" class="flex justify-center">

        <!-- Modal content -->
        <div class=" bg-white rounded-lg shadow dark:bg-gray-700 lg:w-full">
          <!-- Modal header -->
          <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
              <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                  Editar perfil
              </h3>
              <a href="{{route('index')}}">
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Cerrar</span>
                </button>
              </a>
          </div>
          <!-- Modal body -->
          <div class="flex flex-col lg:flex-row lg:max-w-6xl lg:p-2	w-full m-2 max-w-sm">
            <div id="user-img" class="lg:max-w-md lg:p-8">
                <img class="rounded-t-lg max-w-382" @if ($user->img_name) src="{{ asset('storage/'. $user->img_name) }}" @else src="{{ asset('images/default-profile-image.png') }}" @endif>
                <div class="p-5 lg:p-0 lg:pt-5">
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('image') is-invalid @enderror" id="file_input" type="file" name="image">
                @error('image')
                <div class="alert alert-danger text-red-600">{{ $message }}</div>
            @enderror
              </div>
              </div>
            <div id="user-form" class="p-6 w-full">
              <div class="mb-6">
                <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre de usuario</label>
                <input type="text" id="name" name="name" value="{{$user->name}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('name') is-invalid @enderror" placeholder="Nombre de usuario" required>
                @error('name')
                <div class="alert alert-danger text-red-600">{{ $message }}</div>
            @enderror
              </div>
              <div class="mb-6">
                <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Profesión</label>
                <input type="text" id="profesion" name="profesion" value="{{$user->profesion}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('profesion') is-invalid @enderror" placeholder="Profesion o Pasatiempo" required>
                @error('profesion')
                <div class="alert alert-danger text-red-600">{{ $message }}</div>
            @enderror
              </div>
              <div class="mb-6">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción</label>
                <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('description') is-invalid @enderror" placeholder="Escribe aquí tu descripción">{{$user->description}}</textarea>
                @error('description')
                <div class="alert alert-danger text-red-600">{{ $message }}</div>
            @enderror
              </div>
              <button type="submit" href="{{route('admin.index')}}" class="inline-flex items-center mr-2 py-2 px-3 text-sm font-medium text-center text-white bg-purple-700 rounded-lg hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300">
                <svg class="w-5 h-5 pr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"></path></svg> Actualizar perfil
              </button>

            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</section>
