<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión | Finder</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/x-icon" href="{{ asset('Imagenes/finder.ico') }}">
</head>

<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">

    <!-- Navbar -->
    <x-navbar />

    <main class="flex-grow flex items-center justify-center px-4 py-10">
        <div class="max-w-5xl w-full bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-2">

                <!-- Columna izquierda: formulario -->
                <div class="p-8 md:p-10">
                    <h1 class="text-3xl font-bold text-gray-800 mb-2">Bienvenido de nuevo 👋</h1>
                    <p class="text-gray-600 mb-6 text-sm">
                        Inicia sesión para continuar con tu cuenta de <span class="text-blue-600 font-semibold">Finder</span>.
                    </p>

                    <form method="POST" action="{{ route('login.post') }}" class="space-y-5">
                        @csrf

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                                Correo electrónico <span class="text-red-500">*</span>
                            </label>
                            <input
                                id="email"
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autofocus
                                placeholder="ejemplo@correo.com"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-400 focus:outline-none transition">
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">
                                Contraseña <span class="text-red-500">*</span>
                            </label>
                            <input
                                id="password"
                                type="password"
                                name="password"
                                required
                                placeholder="••••••••"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-400 focus:outline-none transition">
                        </div>

                        <!-- Mostrar errores -->
                        @if ($errors->any())
                            <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-3 rounded-md text-sm">
                                <ul class="list-disc list-inside">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="flex items-center justify-between text-sm">
                            <a href="#" class="text-blue-600 hover:underline">¿Olvidaste tu contraseña?</a>
                        </div>

                        <button
                            type="submit"
                            class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-2.5 rounded-lg shadow-md hover:shadow-lg transition-transform duration-300 hover:scale-[1.02]">
                            Iniciar sesión
                        </button>
                    </form>
                </div>

                <!-- Columna derecha: invitación al registro -->
                <div class="bg-gradient-to-br from-blue-500 to-blue-600 text-white p-10 flex flex-col justify-center items-center text-center">
                    <h2 class="text-2xl font-semibold mb-3">¿Aún no tienes una cuenta?</h2>
                    <p class="text-blue-100 mb-6 text-sm max-w-xs">
                        Crear una cuenta te permite acceder a oportunidades laborales y conectar con empresas.
                    </p>
                    <a href="{{ route('register') }}"
                        class="bg-white text-blue-600 font-semibold px-6 py-2.5 rounded-lg shadow hover:bg-gray-100 transition">
                        Crear cuenta
                    </a>
                </div>

            </div>
        </div>
    </main>

    <!-- Footer -->
    <x-footer />

</body>
</html>
