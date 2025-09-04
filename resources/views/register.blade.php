<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrarse</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-600">
    <!-- Barra de navegación -->
    <nav class="bg-gray-800 px-8 py-4 flex items-center">
        <div class="flex items-center">
            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Logo" class="w-12 h-12 ml-40">
        </div>
        <div class="flex space-x-8 ml-14">
            <a href="#" class="text-gray-300 hover:text-white text-2x1">Buscar Empleos</a>
            <a href="#" class="text-gray-300 hover:text-white text-2x1">Contacto</a>
        </div>
        <div class="flex space-x-6 mr-14 ml-auto">
            <a href="{{ route('login') }}" class="bg-green-400 text-white font-semibold px-6 py-3 rounded-[40px] hover:scale-110 transition duration-300">Iniciar Sesion</a>
            <a href="{{ route('register') }}" class="bg-yellow-400 text-blue-600 font-semibold px-6 py-3 rounded-[40px] hover:scale-110 transition duration-300">Registrarse</a>
        </div>
    </nav>

    <!-- Aquí va el contenido del formulario de registro -->
    <div class="bg-white rounded-xl shadow-lg flex w-[700px] overflow-hidden mx-auto mt-10">
        <div class="bg-teal-500 text-white flex flex-col justify-center items-center w-1/2 p-10">
            <h2 class="text-3xl font-bold mb-4">¡Hola!</h2>
            <p class="mb-6">Regístrate con tus datos personales para utilizar todas las funciones del sitio</p>
            <a href="{{ route('login') }}" class="bg-white text-teal-500 px-6 py-2 rounded-full font-semibold hover:bg-teal-100 transition">Iniciar sesión</a>
        </div>
        <div class="w-1/2 p-10 flex flex-col justify-center">
            <h2 class="text-2xl font-bold mb-6 text-teal-500">Registrarse</h2>
            <form method="POST" action="{{ route('register') }}" class="space-y-4">
                @csrf
                <input type="text" name="name" placeholder="Nombre" required class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-teal-300">
                <input type="email" name="email" placeholder="Email" required class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-teal-300">
                <input type="password" name="password" placeholder="Contraseña" required class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-teal-300">
                <input type="password" name="password_confirmation" placeholder="Confirmar contraseña" required class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-teal-300">
                <button type="submit" class="w-full bg-teal-500 text-white py-2 rounded font-semibold hover:bg-teal-600 transition">REGISTRARSE</button>
            </form>
            @if ($errors->any())
                <div class="mt-4 text-red-500">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('success'))
                <div class="mt-4 text-green-500">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>
</body>
</html>