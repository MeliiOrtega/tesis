@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">
    <h1 class="text-3x1 text-center font-bold"> Iniciar sesion</h1>
    <form class="mt-4" action="" method="post">
        @csrf
        {{-- nombres---------------------- --}}
        <label class="text-2x1 font-bold">
            Nombres:
            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg  gray-900 p-2 my-2 focus:bg-white" id="name" name="name">
        </label>
        {{-- ncedula---------------------- --}}
        {{-- <label class="text-2x1 font-bold">
            Cedula:
            <input type="number" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg  gray-900 p-2 my-2 focus:bg-white" id="cedula" name="cedula">
        </label> --}}
        {{-- email---------------------- --}}
        <label class="text-2x1 font-bold">
            Email:
            <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg  gray-900 p-2 my-2 focus:bg-white" id="email" name="email">
        </label>
       {{--  {{-- celular---------------------- --}}
        {{-- <label class="text-2x1 font-bold">
            Celular:
            <input type="number" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg  gray-900 p-2 my-2 focus:bg-white" id="celular" name="celular">
        </label> --}}
        {{-- Contraseña---------------------- --}}
        <label class="text-2x1 font-bold">
            Contraseña:
            <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg  gray-900 p-2 my-2 focus:bg-white" id="password" name="password">
        </label>
        {{-- Verificar_Contraseña---------------------- --}}
        <label class="text-2x1 font-bold">
            Confirmar contraseña:
            <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg  gray-900 p-2 my-2 focus:bg-white" id="password_confirmar" name="password_confirmar">
        </label>

        <button type="submit" class="rounded-md bg-blue-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-blue-600">Registrase</button>
    </form>
</div>
@endsection
