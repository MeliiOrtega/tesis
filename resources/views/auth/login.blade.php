@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">
    <h1 class="text-3x1 text-center font-bold"> Iniciar sesion</h1>
    <form class="mt-4" action="" method="post">
        @csrf
        <label class="text-2x1 font-bold">
            Email:
            <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg  gray-900 p-2 my-2 focus:bg-white" id="email" name="email">
        </label>

        <label class="text-2x1 font-bold">
            Contraseña:
            <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg  gray-900 p-2 my-2 focus:bg-white" id="password" name="password">
        </label>
        @error('message')
        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2"> Contraseña o Correo son incorrectos</p>

        @enderror
        <button type="submit" class="rounded-md bg-blue-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-blue-600">Ingresar</button>

    </form>
</div>
@endsection
