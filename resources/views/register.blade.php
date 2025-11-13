<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registro | Finder</title>
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

                <!-- Columna izquierda -->
                <div class="bg-gradient-to-br from-blue-500 to-blue-600 text-white p-10 flex flex-col justify-center text-center">
                    <h2 class="text-2xl font-semibold mb-3">Crea tu cuenta Finder</h2>
                    <p class="text-blue-100 mb-6 text-sm max-w-xs mx-auto">
                        Encuentra oportunidades laborales o publica tus ofertas como empresa.
                    </p>
                    <a href="{{ route('login') }}"
                        class="bg-white text-blue-600 font-semibold px-6 py-2.5 rounded-lg shadow hover:bg-gray-100 transition">
                        Ya tengo una cuenta
                    </a>
                </div>

                <!-- Columna derecha: formulario -->
                <div class="p-8 md:p-10">
                    <h1 class="text-3xl font-bold text-gray-800 mb-2">Registro</h1>
                    <p class="text-gray-600 mb-6 text-sm">Completa los campos para crear tu cuenta.</p>

                    <form method="POST" action="{{ route('register.post') }}" id="registerForm"
                        enctype="multipart/form-data" class="space-y-5">
                        @csrf

                        <!-- Nombre -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Nombre <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="nombre" value="{{ old('nombre') }}" required
                                placeholder="Ej. Juan"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none">
                        </div>

                        <!-- Apellido -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Apellido <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="apellido" value="{{ old('apellido') }}" required
                                placeholder="Ej. Martínez López"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none">
                        </div>

                        <!-- Correo -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Correo electrónico <span class="text-red-500">*</span>
                            </label>
                            <input type="email" name="email" value="{{ old('email') }}" required
                                placeholder="ejemplo@correo.com"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none">
                        </div>

                        <!-- Rol -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Tipo de usuario <span class="text-red-500">*</span>
                            </label>
                            <select id="rol" name="tipo_usuario" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none">
                                <option value="">Selecciona una opción</option>
                                <option value="candidato" {{ old('tipo_usuario') == 'candidato' ? 'selected' : '' }}>Candidato</option>
                                <option value="empleador" {{ old('tipo_usuario') == 'empleador' ? 'selected' : '' }}>Empleador</option>
                            </select>
                        </div>

                        <!-- CAMPOS CANDIDATO -->
                        <div id="candidatoFields" class="hidden space-y-4">

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Teléfono</label>
                                <input type="text" name="telefono" value="{{ old('telefono') }}"
                                    placeholder="Número de contacto"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Ubicación</label>
                                <input type="text" name="ubicacion" value="{{ old('ubicacion') }}"
                                    placeholder="Ciudad, país"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Fecha de nacimiento</label>
                                <input type="date" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none">
                            </div>

                        </div>

                        <!-- CAMPOS EMPLEADOR -->
                        <div id="empleadorFields" class="hidden space-y-4">

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Nombre de la empresa</label>
                                <input type="text" name="empresa" value="{{ old('empresa') }}"
                                    placeholder="Ej. TechFinder S.A."
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Sector</label>
                                <input type="text" name="sector" value="{{ old('sector') }}"
                                    placeholder="Ej. Tecnología, Educación..."
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Ubicación</label>
                                <input type="text" name="ubicacion_empresa" value="{{ old('ubicacion_empresa') }}"
                                    placeholder="Ej. Managua, Nicaragua"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Descripción</label>
                                <textarea name="descripcion" rows="3" placeholder="Breve descripción de la empresa"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none">{{ old('descripcion') }}</textarea>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Sitio web</label>
                                <input type="url" name="sitio_web" value="{{ old('sitio_web') }}"
                                    placeholder="https://www.ejemplo.com"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none">
                            </div>

                        </div>

                        <!-- Contraseña -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">
                                    Contraseña <span class="text-red-500">*</span>
                                </label>
                                <input type="password" name="password" required placeholder="••••••••"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">
                                    Confirmar contraseña <span class="text-red-500">*</span>
                                </label>
                                <input type="password" name="password_confirmation" required placeholder="Repite la contraseña"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none">
                            </div>
                        </div>

                        <!-- Errores -->
                        @if ($errors->any())
                            <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-3 rounded-md text-sm">
                                <ul class="list-disc list-inside">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Botón -->
                        <button type="submit"
                            class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-2.5 rounded-lg shadow-md hover:shadow-lg transition-transform duration-300 hover:scale-[1.02]">
                            Registrarme
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </main>

    <x-footer />

    <!-- SCRIPT -->
    <script>
        const rolSelect = document.getElementById('rol');
        const candidatoFields = document.getElementById('candidatoFields');
        const empleadorFields = document.getElementById('empleadorFields');

        function toggleFields() {
            const role = rolSelect.value;
            candidatoFields.classList.toggle('hidden', role !== 'candidato');
            empleadorFields.classList.toggle('hidden', role !== 'empleador');
        }

        rolSelect.addEventListener('change', toggleFields);
        document.addEventListener('DOMContentLoaded', toggleFields);
    </script>

</body>
</html>
