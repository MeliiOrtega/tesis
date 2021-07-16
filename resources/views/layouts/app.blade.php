<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <title>@yield('title')</title>
  <!-- ... -->
</head>
<body class="  bg-scroll bg-no-repeat" style="background-image: url(img/fondo.jpg)">

  <nav class="flex py-5  top-0 bg-blue-500 text-white shadow-lg">
      <div class="w-1/2 px-12 mr auto nav">
          <p class="text-2x1 font-bold">Activate</p>
      </div>


<ul class="w-1/2 px-16 ml auto  flex justify-end pt-1">
    @if(auth()->check())
    <li class="mx-6">
        <p class="text-xl"> Bienvenido, {{auth()->user()->name}}</p>
    </li>

    <li>
        <a href="{{route('login.destroy')}}" class="font-bold  py-2 px-4 rounded-md bg-red-500 hover:bg-red-600 hover:text-blue-700">Cerrar Sesion</a>
    </li>
    @else
    <li>
        <a href="{{route('login.index')}}" class="font-semibold rounded-md hover:bg-blue-700 py-3 px-4">Iniciar Sesion</a>
        <a href="{{route('register.index')}}" class="font-semibold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-blue-700">Registrar</a>
    </li>
    @endif
</ul>


  </nav>
  @yield('content')
</body>
</html>
