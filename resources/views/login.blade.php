<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-200">
    <!-- Navbar como componente Blade -->
    <x-navbar />

    <main class="max-w-6xl mx-auto mt-12 px-6">
        <h1 class="text-center text-4xl text-blue-600 font-semibold mb-8">¡Bienvenido al inicio de sesión de Finder!</h1>

        <section class="bg-gray-100 rounded-lg shadow-md p-8">
            <div class="grid grid-cols-2 md:grid-cols-2 gap-5">
                <!-- Columna izquierda: Ya registrado + formulario -->
                <div>
                    <h2 class="text-xl text-yellow-500 font-semibold mb-2">¿Ya estás registrado?</h2>
                    <hr class="border-t border-gray-200 mb-4">
                    <p class="text-gray-600 mb-6">Si ya tienes una cuenta registrada, ingresa con tu correo electrónico y contraseña.</p>

                    <form method="POST" action="{{ route('login') }}" class="space-y-4">
                        @csrf

                        <div>
                            <label for="email" class="block text-bg-green-400 mb-1">Correo electrónico <span class="text-red-500">*</span></label>
                            <input id="email" type="email" name="email" required placeholder="Correo electrónico" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-orange-200">
                        </div>

                        <div>
                            <label for="password" class="block text-bg-green-400 mb-1">Contraseña <span class="text-red-500">*</span></label>
                            <input id="password" type="password" name="password" required placeholder="Contraseña" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-orange-200">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="bg-green-400 text-white font-semibold px-10 py-3 rounded-[10px] hover:scale-110 transition duration-300 hover:bg-green-600">INGRESAR</button>
                        </div>

                        <div class="text-center mt-3">
                            <a href="#" class="text-sm text-blue-600 hover:underline">¿Olvidaste tu contraseña?</a>
                        </div>

                        @if ($errors->any())
                        <div class="mt-4 text-red-600">
                            <ul class="list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </form>


                </div>

                <!-- Columna derecha: Crear cuenta -->
                <div class="flex flex-col justify-center items-start md:items-center">
                    <div class="w-full md:w-11/12">
                        <h2 class="text-xl text-green-500 font-semibold mb-2">¿Aún no tienes cuenta?</h2>
                        <hr class="border-t border-gray-200 mb-4">
                        <p class="text-gray-600 mb-6">Crear una cuenta tiene muchos beneficios .</p>

                        <div class="mt-6">
                            <a href="{{ route('register') }}" class="bg-blue-400 text-white font-semibold px-6 py-3 rounded-md hover:scale-110 transition duration-300 hover:bg-blue-600 inline-block">
                                CREAR UNA CUENTA
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>